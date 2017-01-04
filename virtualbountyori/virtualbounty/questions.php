
<?php
session_start();
$questions = array(
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam <input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">'
);
$questions2 = array(
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
'<img  class="qimg" src="images/q.png"><br/> Lorem ipsum nunquam<input type="text" class="input-ans" id="answer">',
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

