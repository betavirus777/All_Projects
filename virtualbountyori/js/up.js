  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '852458311489329',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.4' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
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
game += "<div id=\"menu3\" style=\"pointer-events:none;\">";
game += "<div id=\"correct\">";
game += "<img src=\"images\/correct.png\">";
game += "<\/div>";
game += "<div id=\"wrong\">";
game += "<img src=\"images\/wrong.png\">";
game += "<\/div>";
game += "<\/div>";
var _id;
var user_name;
var email;
var email_resp;
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    FB.api('/me', function(response) {
		_id=response.id;
		$.post("check.php",{'id':response.id},function(data,status){
			if(data==1)
			{
		user_name=response.name;
		if(response.email==''||response.email==null)
		document.getElementById('vb-container').innerHTML='Plese enter your email id!<br/><input type="email" id="useremail"><br/><br /><button type="btn btn-primary" onClick="submitemail()">Submit</button>';
		else
		email_resp=response.email;
		}
		else
	{
		alert('You can play only once!');
		document.getElementById('vb-container').innerHTML='Thanks for playing!<br />';
	}
	});
	
	
	});
  }

function submitemail()
{
	if(email_resp==''||email_resp==null)
	{
	email=document.getElementById('useremail').value;
	if(email==''||email==null||email.indexOf('@')<0||email.indexOf('.')<0)
	{
	alert('Invalid email id!');
	document.getElementById('useremail').value='';
	$('#useremail').focus();
	return false;
	}
	}
	else
	email=email_resp;	
	
	
	$.post("register.php",{'id':_id,'name':user_name,'email':email},function(data,status){
		if(data==1)
		{
		document.getElementById('vb-container').innerHTML=game;
		init();
		}
		else if(data==0)
		{
		alert('This email address is already in use!');
		document.getElementById('useremail').value='';
	$('#useremail').focus();
		
		}
		
		else
		alert('There was an error!');
	});
}