<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<?php
session_start();
$answers = array('Swedish House Mafia','Benny','QPR','Missile Command','Coutinho','Brittania','Half-Life','Mozilla','Iron Maiden','Nirma','Courage the cowardly dog','Wicketkeeper\'s helmet','Pikachu','Scheele\'s Green','Pikachu'
);
$answer=$_POST['answer'];
$no=$_POST['no'];
if(strcasecmp($answers[$no],$answer)==0)
{
	echo 'correct answer!';
	if($no<5)
	$_SESSION['score']=$_SESSION['score']+10;
	else if($no<10)
	$_SESSION['score']=$_SESSION['score']+15;
	else if($no<14)
	$_SESSION['score']=$_SESSION['score']+20;
	else
	$_SESSION['score']=$_SESSION['score']+25;
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
if($connection->query("UPDATE  `a4823676_dbmain`.`participate` SET  `score` =  '".$_SESSION['score']."' WHERE  `participate`.`email` ='".$_SESSION['emailid']."' LIMIT 1 ;"))
echo 'success!'.$_SESSION['score'];
}

?>
</body>
</html>
