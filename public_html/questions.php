
<?php
session_start();
$questions = array(
'<img  class="qimg" src="images/vb_q1_1.png"><br/><br/><img  class="qimg" src="images/vb_q1_2.jpg"><br/>Connect the images.<br>Clues: Elementary, Self-Similarity<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q2.png"><br/><input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q3.jpg"><br/>Connect:<br>X= ....- ---.. .-.-.- ---.. -.... .---- .---- / -.
<br>Y= ..--- .-.-.- ...-- ...-- -.... ....- / .
		<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/vb_q3.jpg"><br/> 4Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 5Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 6Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 7Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 8Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 9Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 10Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> L11orem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lo12rem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lor13em ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 14Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 15Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 16Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 17Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> 18Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">'
);
$questions2 = array(
'<img  class="qimg" src="images/q.png"><br/> Lodfg ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Loredm ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">'
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
echo '<img  class="qimg" src="images/q.png"><img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">';
}
else
{
	$_SESSION['current']='x'.$id[0];
$num=((ord($id[0])-49)*3)+(ord($id[1])-48);
echo $questions[$num-1];
}

?>

