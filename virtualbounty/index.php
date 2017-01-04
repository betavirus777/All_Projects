<?php
session_start();
$_SESSION['x01']=0;
$_SESSION['x02']=0;
$_SESSION['x03']=0;
$_SESSION['x04']=0;
$_SESSION['x05']=0;
$_SESSION['x06']=0;
$_SESSION['x1']=0;
$_SESSION['x2']=0;
$_SESSION['x3']=0;
$_SESSION['x4']=0;
$_SESSION['x5']=0;
$_SESSION['x6']=0;
$_SESSION['current']='x1';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
p
{
	font-size: 30px;
	color : "white";
}
.qimg
{
	height:300px;
}
.question
{
	color:"white";
	font-weight:bold;
}
#vb-container
{
	width: 600px;
    height: 600px;
	position:relative;
	margin: 0 auto;
}
#menu {
    background: #aaa;
    position: absolute;
    width: 600px;
    height: 600px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 300px;
    -moz-border-radius: 300px;
    -webkit-border-radius: 300px;
	transition:transform 0.5s;
	box-shadow:#000 0 0 20px;
}

#menu2 {
    background: #aaa;
    position: absolute;
	top:150px;
	left:150px;
    width: 300px;
    height: 300px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 150px;
    -moz-border-radius: 150px;
    -webkit-border-radius: 150px;
	box-shadow:#000 0 0 20px;
	transition:transform 0.5s;
	z-index:10 !important;
}
#menu2wrapper {
    background: rgba(0,0,0,0.2);
    position: absolute;
	top:150px;
	left:150px;
    width: 300px;
    height: 300px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 150px;
    -moz-border-radius: 150px;
    -webkit-border-radius: 150px;
	transition:transform 0.5s;
	z-index:20 !important;
}

#menu3 {
    background:#FFC;
    position: absolute;
	top:250px;
	left:250px;
    width: 100px;
    height: 100px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 100px;
    -moz-border-radius: 100px;
    -webkit-border-radius: 100px;
	box-shadow:#000 0 0 10px;
	transition:transform 0.5s;
	z-index:25 !important;
	line-height:100px;
}
#correct,#wrong
{
	position:absolute;
	left:0;
	top:0;
	opacity:0;
}
#center {
    position: absolute;
    left: 70px;
    top: 70px;
    width: 60px;
    height: 60px;
    z-index: 10;
    background: #eee;
    background: linear-gradient(top, #eee, #aaa);
    background: -moz-linear-gradient(top, #eee, #aaa);
    background: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#aaa));
    border-radius: 30px;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
}
#center a {
    display: block;
    width: 100%;
    height: 100%
}
.item {
    overflow: hidden;
    position: absolute;
    width: 300px;
    height: 300px;
    transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -webkit-transform-origin: 100% 100%;
    transition: background .5s;
    -moz-transition: background .5s;
    -webkit-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
}
.small {
    overflow: hidden;
    position: absolute;
    width: 150px;
    height: 150px;
    transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -webkit-transform-origin: 100% 100%;
    transition: background .5s;
    -moz-transition: background .5s;
    -webkit-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
}

.item:hover {
	background-image:url(images/black-bg.jpg);
	cursor:pointer;
}
.item1 {
	background:#F00;
    z-index: 1;
    transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -webkit-transform: rotate(60deg);
}
.item2 {
	background:#F60;
    z-index: 2;
    transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -webkit-transform: rotate(120deg);
}
.item3 {
	background:#093;
    z-index: 3;
    transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
}
.item4 {
	background:#03C;
    z-index: 4;
    transform: rotate(240deg);
    -moz-transform: rotate(240deg);
    -webkit-transform: rotate(240deg);
}
.item5 {
	background:#63F;
    z-index: 5;
    transform: rotate(300deg);
    -moz-transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
}
.item6 {
	background:#fff;
    border: none;
    position: absolute;
    z-index: 6;
    transform: rotate(-30deg);
    -moz-transform: rotate(-30deg);
    -webkit-transform: rotate(-30deg);
}
#wrapper6 {
    position: absolute;
    width: 300px;
    height: 300px;
    overflow: hidden;
    transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -webkit-transform-origin: 100% 100%;
}

#wrapper6small {
    position: absolute;
    width: 150px;
    height: 150px;
    overflow: hidden;
    transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -webkit-transform-origin: 100% 100%;
}
.item1 .content {
    left: -30px;
    top: 45px;
    transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -webkit-transform: rotate(-60deg);
}
.item2 .content {
    left: -33px;
    top: 48px;
    transform: rotate(-120deg);
    -moz-transform: rotate(-120deg);
    -webkit-transform: rotate(-120deg);
}
.item3 .content {
    left: -21px;
    top: 36px;
    transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -webkit-transform: rotate(-180deg);
}
.item4 .content {
    left: -15px;
    top: 54px;
    transform: rotate(-240deg);
    -moz-transform: rotate(-240deg);
    -webkit-transform: rotate(-240deg);
}
.item5 .content {
    left: -30px;
    top: 60px;
    transform: rotate(-300deg);
    -moz-transform: rotate(-300deg);
    -webkit-transform: rotate(-300deg);
}
.item6 .content {
    left: 60px;
    top: -30px;
    transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -webkit-transform: rotate(30deg);
}
.item1 .sm-content {
    left: -15px;
    top: 22.5px;
    transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -webkit-transform: rotate(-60deg);
}
.item2 .sm-content {
    left: -16.5px;
    top: 24px;
    transform: rotate(-120deg);
    -moz-transform: rotate(-120deg);
    -webkit-transform: rotate(-120deg);
	
}

.item3 .sm-content {
    left: -10.5px;
    top: 18px;
    transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -webkit-transform: rotate(-180deg);
	
}
.item4 .sm-content {
    left: -15px;
    top: 27px;
    transform: rotate(-240deg);
    -moz-transform: rotate(-240deg);
    -webkit-transform: rotate(-240deg);
	
}
.item5 .sm-content {
    left: -15px;
    top: 30px;
    transform: rotate(-300deg);
    -moz-transform: rotate(-300deg);
    -webkit-transform: rotate(-300deg);
	
}
.item6 .sm-content {
    left: 30px;
    top: -15px;
    transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -webkit-transform: rotate(30deg);
	
}
.content, .content a,.sm-content, .sm-content a {
	display:none;
    width: 100%;
    height: 100%;
    text-align: center
}
.content,.sm-content {
    position: relative;
}

.display-target {
    display: none;
    text-align: center;
    opacity: 0;
}
.display-target:target {
    display: block;
    opacity: 1;
    animation: fade-in 1s;
    -moz-animation: fade-in 1s;
    -webkit-animation: fade-in 1s;
    -o-animation: fade-in 1s;
    -ms-animation: fade-in 1s;
}
@keyframes fade-in {
    from { opacity: 0 }
    to { opacity: 1 }
}

@-moz-keyframes fade-in {
    from { opacity: 0 }
    to { opacity: 1 }
}
@-webkit-keyframes fade-in {
    from { opacity: 0 }
    to { opacity: 1 }
}
@-o-keyframes fade-in {
    from { opacity: 0 }
    to { opacity: 1 }
}
@-ms-keyframes fade-in {
    from { opacity: 0 }
    to { opacity: 1 }
}
.circle
{

	display:inline-block;
	width:50px;
	height:50px;
	border-radius:30px;
	background-color:rgba(70,70,70,0.7);
	font-size:24px;
	line-height:50px;
	color:white;
	transition:background 0.3s;
}
.correctans
{
	color:#0C0;
	transform:scale(1.2,1.2);
}
.circle:hover
{
	background-color:rgba(100,100,100,0.8);
	transform:scale(1.2,1.2);
}
.circle-sm
{

	display:inline-block;
	width:35px;
	height:35px;
	border-radius:17.5px;
	background-color:rgba(70,70,70,0.7);
	font-size:18px;
	line-height:35px;
	color:white;
	transition:background 0.3s;
}
.circle-sm:hover
{
	background-color:rgba(100,100,100,0.8);
	transform:scale(1.2,1.2);
}
.circle-lg-1
{
	position:absolute;
	top:120px;
	left:50px;
}
.circle-lg-2
{
	position:absolute;
	top:100px;
	left:115px;
}
.circle-lg-3
{
	position:absolute;
	top:120px;
	left:180px;
}
.circle-sm-1
{
	position:absolute;
	top:50px;
	left:25px;
}
.circle-sm-2
{
	position:absolute;
	top:50px;
	left:65px;
}

#member_modal.modal.fade .modal-dialog {
	bottom:25%;
    -webkit-transform: scale(0.3)  translate(0,350px);
    -moz-transform: scale(0.3)  translate(0,350px);
    -ms-transform: scale(0.3)  translate(0,350px);
    transform: scale(0.3)  translate(0,350px);
	transform-origin:0% 50%;
    opacity: 0;
    -webkit-transition: all ease-in-out 0.4s;
    -moz-transition: all ease-in-out 0.4s;
	-ms-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
	border-radius:0px !important;
	width:340px !important;
	height:340px !important;
}
#member_modal
{
	    -webkit-transition: all ease-in-out 0.4s;
    -moz-transition: all ease-in-out 0.4s;
	-ms-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
}

#member_modal.modal.fade .modal-dialog >modal-body
{
	
	background-color:#000 !important;
}

#member_modal.modal.fade.in .modal-dialog {
    -webkit-transform: scale(1)  translate(0,100px);
    -moz-transform: scale(1)  translate(0,100px);
    -ms-transform: scale(1)  translate(0,100px);
    transform: scale(1)  translate(0,100px);
    opacity: 1;
}
.input-ans
{
	background:none;
	outline:none;
	border:none;
	border-bottom:rgba(255,255,255,0.6) 2px solid;
	color:#fff;
	display:inline-block;
}
.done
{
background-image:url(images/black-bg.jpg);
}
.done:hover
{
	background-image:url(images/black-bg.jpg);
}
</style>
</head>

<body>
<script>
var game="";
game += "    <div id=\"menu\">";
game += "        <div class=\"item1 item\" onMouseOver=\"disp(1)\" onMouseOut=\"hide(1)\" onClick=\"rot(0)\">";
game += "            <div class=\"content\" id=\"1\">";
game += "            <div class=\"circle circle-lg-1\" id=\"11\" onClick=\"q('11')\">1<\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"12\" onClick=\"q('12')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"13\" onClick=\"q('13')\"> 3 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item2 item\" onMouseOver=\"disp(2)\"  onMouseOut=\"hide(2)\"  onClick=\"rot(1)\">";
game += "            <div class=\"content\" id=\"2\">";
game += "            <div class=\"circle circle-lg-1\" id=\"21\" onClick=\"q('21')\"> 1 <\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"22\" onClick=\"q('22')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"23\" onClick=\"q('23')\"> 3 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item3 item\" onMouseOver=\"disp(3)\"  onMouseOut=\"hide(3)\" onClick=\"rot(2)\">";
game += "            <div class=\"content\" id=\"3\">";
game += "            <div class=\"circle circle-lg-1\" id=\"31\" onClick=\"q('31')\"> 1 <\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"32\" onClick=\"q('32')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"33\" onClick=\"q('33')\"> 3 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item4 item\" onMouseOver=\"disp(4)\"  onMouseOut=\"hide(4)\" onClick=\"rot(3)\">";
game += "            <div class=\"content\" id=\"4\">";
game += "            <div class=\"circle circle-lg-1\" id=\"41\" onClick=\"q('41')\"> 1 <\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"42\" onClick=\"q('42')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"43\" onClick=\"q('43')\"> 3 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item5 item\" onMouseOver=\"disp(5)\" onMouseOut=\"hide(5)\" onClick=\"rot(4)\">";
game += "            <div class=\"content\" id=\"5\">";
game += "            <div class=\"circle circle-lg-1\" id=\"51\" onClick=\"q('51')\"> 1 <\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"52\" onClick=\"q('52')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"53\" onClick=\"q('53')\"> 3 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div id=\"wrapper6\">";
game += "            <div class=\"item6 item\" onMouseOver=\"disp(6)\"  onMouseOut=\"hide(6)\" onClick=\"rot(5)\">";
game += "                <div class=\"content\" id=\"6\">";
game += "                <div class=\"circle circle-lg-1\" id=\"61\" onClick=\"q('61')\"> 1 <\/div>";
game += "            <div class=\"circle circle-lg-2\" id=\"62\" onClick=\"q('62')\"> 2 <\/div>";
game += "            <div class=\"circle circle-lg-3\" id=\"63\" onClick=\"q('63')\"> 3 <\/div>";
game += "            <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <\/div>     ";
game += "           <div id=\"menu2wrapper\"><\/div>";
game += "            <div id=\"menu2\">";
game += "        <div class=\"item1 item small\" style=\"z-index:14;\" onMouseOver=\"_disp('01')\" onMouseOut=\"hide('01')\" onClick=\"_rot(0)\">";
game += "            <div class=\"sm-content\" id=\"01\">";
game += "            <div class=\"circle-sm circle-sm-lg-1\" id=\"011\" onClick=\"q('011')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-lg-2\" id=\"012\" onClick=\"q('012')\"> 2 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item2 item small\"  style=\"z-index:15;\" onMouseOver=\"_disp('02')\" onMouseOut=\"hide('02')\" onClick=\"_rot(1)\">";
game += "            <div class=\"sm-content\" id=\"02\">";
game += "            <div class=\"circle-sm circle-sm-1\" id=\"021\" onClick=\"q('021')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-2\" id=\"022\" onClick=\"q('022')\"> 2 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item3 item small\"  style=\"z-index:16;\" onMouseOver=\"_disp('03')\" onMouseOut=\"hide('03')\" onClick=\"_rot(2)\">";
game += "            <div class=\"sm-content\" id=\"03\">";
game += "            <div class=\"circle-sm circle-sm-1\" id=\"031\" onClick=\"q('031')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-2\" id=\"032\" onClick=\"q('032')\"> 2 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item4 item small\" style=\"z-index:17;\" onMouseOver=\"_disp('04')\" onMouseOut=\"hide('04')\" onClick=\"_rot(3)\">";
game += "            <div class=\"sm-content\" id=\"04\">";
game += "            <div class=\"circle-sm circle-sm-1\" id=\"041\" onClick=\"q('041')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-2\" id=\"042\" onClick=\"q('042')\"> 2 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div class=\"item5 item small\" style=\"z-index:18;\" onMouseOver=\"_disp('05')\" onMouseOut=\"hide('05')\" onClick=\"_rot(4)\">";
game += "            <div class=\"sm-content\" id=\"05\">";
game += "            <div class=\"circle-sm circle-sm-1\" id=\"051\" onClick=\"q('051')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-2\" id=\"052\" onClick=\"q('052')\"> 2 <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "        <div id=\"wrapper6small\">";
game += "            <div class=\"item6 item small\"  style=\"z-index:19;\" onMouseOver=\"_disp('06')\" onMouseOut=\"hide('06')\" onClick=\"_rot(5)\">";
game += "                <div class=\"sm-content\" id=\"06\">";
game += "                <div class=\"circle-sm circle-sm-1\" id=\"061\" onClick=\"q('061')\"> 1 <\/div>";
game += "            <div class=\"circle-sm circle-sm-2\" id=\"062\" onClick=\"q('062')\"> 2 <\/div>";
game += "            <\/div>";
game += "            <\/div>";
game += "        <\/div>";
game += "<\/div>";
game += "<div id=\"menu3\">";
game += "<div id=\"correct\">";
game += "<img src=\"images\/correct.png\">";
game += "<\/div>";
game += "<div id=\"wrong\">";
game += "<img src=\"images\/wrong.png\">";
game += "<\/div>";
game += "<\/div>";

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
window.onload=function(){
		document.getElementById('vb-container').innerHTML=game;
		init();}

</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>
<div id="vb-container">


</div>
<div id="member_modal" class="modal fade" role="dialogue">
	<div class="modal-dialog">
	<div class="modal-content" style="border-radius:0px;background-color:rgba(0,0,0,0.8);">
      
      <div class="modal-body" id="member-details" style="margin:0 auto;">
        
      </div>
    </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
<script>
var current;
function init()
{
	document.getElementById('menu2').style.pointerEvents = 'none';
for(var i=1; i<=6;i++)
for(var j=1; j<=3;j++)
{
var circle=document.getElementById(''+i+j);
circle.style.position="absolute";
circle.style.left=j==1?"60px":j==2?"120px":"180px";
circle.style.top=j==1?"120px":j==2?"100px":"120px";
}
for(var j=1; j<=3;j++)
{
var circle=document.getElementById(''+5+j);
circle.style.position="absolute";
circle.style.left=j==1?"70px":j==2?"130px":"190px";
circle.style.top=j==1?"120px":j==2?"100px":"120px";
}
for(var k=1;k<=4;k++)
document.getElementById(k).style.transform="rotate(-"+60+"deg)";
document.getElementById(5).style.transform="rotate(-"+60+"deg)";
document.getElementById(6).style.transform="rotate(-30deg)";

for(var i=1; i<=6;i++)
for(var j=1; j<=2;j++)
{
var circle=document.getElementById('0'+i+j);
circle.style.position="absolute";
circle.style.left=j==1?"30px":"80px";
circle.style.top=j==1?"50px":"50px";
}
for(var k=1;k<=5;k++)
document.getElementById('0'+k).style.transform="rotate(-"+60+"deg)";
document.getElementById('06').style.transform="rotate(-30deg)";
}
var _enable=false;
var _enabled=-1;
function disp(x)
{
	document.getElementById(x).style.display="block";
}
function _disp(x)
{
	if(_enable==true)
	document.getElementById(x).style.display="block";
	else if(x=='0'+_enabled)
	document.getElementById(x).style.display="block";
}

function hide(x)
{
	document.getElementById(x).style.display="none";
}
var ang_dist=[0,1,2,3,4,5];
function rot(x)
{
	var temp=Math.abs(ang_dist[x]);
		$('#menu').css('transform','rotate('+-60*temp+'deg)');
}
function _rot(x)
{
	if(_enable==true)
	{
	var temp=Math.abs(ang_dist[x]);
		$('#menu2').css('transform','rotate('+-60*temp+'deg)');
		_enable=false;
		_enabled=x+1;
	}
}
function q(x)
{
	current=x;
	$.post("questions.php", {'id':x},function(data, status){
	data=data+'<br><br><button class="btn btn-default" onClick="submitans();">Submit</button>'
	document.getElementById('member-details').innerHTML=data;
	document.getElementById('answer').onkeyup = function(e)
{
if(e.keyCode==13)
{
	submitans();
}
}
	$('#member_modal').modal('show');
    $('#answer').focus();
});

}

function submitans()
{
	var ans=document.getElementById('answer').value;
	$.post("answer.php", {'id':current,'answer':ans},function(data, status){
		$('#member_modal').modal('hide');
	if(data==0)
	$('#wrong').delay(500).animate({opacity:1},1000).delay(1000).animate({opacity:0},1000);
	else
	{
	$('#correct').delay(500).animate({opacity:1},1000).delay(1000).animate({opacity:0},1000);
		document.getElementById(current).style.pointerEvents = 'none';
		$('#'+current).addClass('correctans');
	$.post("enable.php", {},function(data, status){
	if(data==1)
	{
		$('#'+current).parent(this).parent(this).addClass('done').css('pointer-events','none');
		$('#menu2wrapper').delay(500).animate({opacity:0},1000).delay(1000).hide();
		document.getElementById('menu2').style.pointerEvents = 'auto';
		_enable=true;
	}
});
	}
	if(current[0]=='0')
	$.post("enable.php", {'inner':1},function(data, status){
	if(data==1)
	{
		$('#'+current).parent(this).parent(this).addClass('done').css('pointer-events','none');
		$('#menu2wrapper').show().css('opacity','1');
		document.getElementById('menu2').style.pointerEvents = 'none';
		_enable=false;
		_enabled=-1;
	}
});
	});
}
</script>
</body>
</html>