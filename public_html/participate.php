<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<?php
$questions = array(
'<img  class="qimg" src="images/q1.png">'
,'<img  class="qimg" src="images/q2.png">'
,'<img  class="qimg" src="images/q3-1.jpg"><img  class="qimg" src="images/q3-2.jpg">'
,'<img  class="qimg" src="images/q4-1.jpg"><img  class="qimg" src="images/q4-2.jpg"><img  class="qimg" src="images/q4-3.jpg"><img  class="qimg" src="images/q4-4.jpg">'
,'<img  class="qimg" src="images/q5.jpg">'
,'<img  class="qimg" src="images/q6-1.png"><img  class="qimg" src="images/q6-2.png">'
,'<img  class="qimg" src="images/q7-1.png"><img  class="qimg" src="images/q7-2.png">'
,'<img  class="qimg" src="images/q8.png">'
,'<img  class="qimg" src="images/q9-1.png"><img  class="qimg" src="images/q9-2.png">'
,'<img  class="qimg" src="images/q10.png">'
,'<h2>Ross and Chandler bought a ‘special’ computer in Kansas.</h2>'
,'<h2>In a game of cricket between team A and B, team A need 5 runs of a single ball. They manage to win even though team B concedes no boundaries. Where has the ball hit?</h2>'
,'<h2>Jeff Bezos defeated me when the last century was about to close. It was a shock, but I tackled it well.</h2>'
,'<img  class="qimg" src="images/q14.png">'
,'<b>Connect the first 2 and the Next 2</b> <br /><img  class="qimg" src="images/q15-1.png"><img  class="qimg" src="images/q15-2.png"><img  class="qimg" src="images/q15-3.png"><img  class="qimg" src="images/q15-4.png">','Pikachu'
);
$emailid=$_POST['emailid'];
$servername = "localhost";
$username = "a6950742_ph";
$password = "saikiran1";
$dbname = "a6950742_db1";
// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

$result=$connection->query("SELECT  `email` 
FROM  `participate` 
WHERE  `email` = CONVERT( _utf8 '".$emailid."'
USING latin1 ) 
COLLATE latin1_general_ci
LIMIT 0 , 30");

if(mysqli_num_rows($result) == 0) {
	session_start();
$_SESSION['score']=0;
$_SESSION['started']=1;
$_SESSION['emailid']=$emailid;
	$sql = "INSERT INTO `".$dbname."`.`participate` (`email`)
VALUES ('$emailid')";
     if ($connection->query($sql) === TRUE) {
		 echo '<div class="question" id="question0">'.$questions[0].'<br /><br /><input type="text" class="input-lg" id="ans0"><br /><br /><button class="btn btn-lg btn-primary next" id="'.'0'.'" onClick="click_next(0);">Next</button></div>';
		 $y=1;
		 for($x=1;$x<15;$x++)
		 {
			 if($x!=14)
		 echo '<div class="question hide" id="question'.$x.'">'.$questions[$x].'<br /><br /><input type="text" class="input-lg" id="ans'.$x.'"><br /><br /><button class="btn btn-lg btn-primary next" id="'.$x.'" onClick="click_next('.$x.');">Next</button></div>';
			else
			echo '<div class="question hide" id="question'.$x.'">'.$questions[$x].'<br /><br /><input type="text" class="input-lg" id="ans14"><br /><br /><button class="btn btn-lg btn-primary" id="finish" onClick="finish_click();">Finish</button></div>';
		 }
		
}
} else {
    echo 'You can participate only once!';
}

?>
</body>
</html>
