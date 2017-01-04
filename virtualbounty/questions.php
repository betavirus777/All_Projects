
<?php
session_start();
$questions = array(
'<img  class="qimg" src="images/vb_q1_1.png"><br/><br/><img  class="qimg" src="images/vb_q1_2.jpg"><br/><p>Connect the images.</p><br><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q2.png"><br/><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q3.jpg"><br/>Connect:<br><p>X= ....- ---.. .-.-.- ---.. -.... .---- .---- / -.
<br>Y= ..--- .-.-.- ...-- ...-- -.... ....- / .</p>
		<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q5.png"><br/><p>This is the path that you have made. <br/>
Alternate timelines will still lead you here.<br/>
This is the penultimate answer to your question. <br/>

The song of the night.<br/>
This is the utopia.<br/>
This is a new dawn.<br/>
This is reincarnation.<br/></p>
		<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q8.jpg"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q9.jpg"><br/><p>Graham Chapman, Matt Bomer, Jim Parsons</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q10.jpg"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q11.png"><br/> <input type="text" class="input-ans" id="answer">',
'<p><br/>_______ is a city and separate woreda in Ethiopia. Located in the Semien ______ Zone of the Amhara Region, ______ is north of Tana Lake on the Lesser Angereb River and southwest of the Simien Mountains.</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q16_1.png"><br/><br/><img  class="qimg" src="images/vb_q16_2.png"> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q12.jpg"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q13.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb14_q2.png"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q14.PNG"><br/><p>My Friends and I rented an apartment nearby. What’s your plan?</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb14_q6.png"><br/><p>https://www.linked.in.com/pub/mars-traci/32/438/6b5</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q19.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q21.png"><br/><p>Whut iz teh diseese thut i um suffuring frum?</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q22.jpg"><br/> <input type="text" class="input-ans" id="answer">'
);
$questions2 = array(
'<img  class="qimg" src="images/vb_l2_1.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_2.png"><br/> <input type="text" class="input-ans" id="answer">',
'<br/><p>Ross and Chandler bought a ‘special’ computer in Kansas.</p><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_3.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q4.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q6.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q7.png"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q8.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q9.png"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q10.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q11.PNG"><br/> <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_l2_q15.JPG"><br/> <input type="text" class="input-ans" id="answer">'
);
$id=$_POST['id'];
if($id[0]=='0')
{
	$_SESSION['current']='x'.$id[0].$id[1];
$num=(ord($id[1])-49)*2+(ord($id[2])-48);
echo $questions2[$num-1];
}
else if($id=='final')
{
	$_SESSION['current']='final';
echo '<br/><p>The analyst rank ranger, a gray heart, <br>leaves an ignorant kit<br>famed by a grey tit!!!<br><br>What is the awesome revelation here???? </p><input type="text" class="input-ans" id="answer">';
}
else
{
	$_SESSION['current']='x'.$id[0];
$num=((ord($id[0])-49)*3)+(ord($id[1])-48);
echo $questions[$num-1];
}

?>

