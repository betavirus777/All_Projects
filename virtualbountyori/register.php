
<?php

$servername = "mysql1.000webhost.com";
$username = "a4823676_admin";
$password = "qwe123!";
$dbname = "a4823676_dbmain";
$id=$_POST['id'];
$emailid=$_POST['email'];
$name=$_POST['name'];
$sql = "INSERT INTO  `a4823676_dbmain`.`participate` (
`id` ,
`email` ,
`name`
)
VALUES (
'".$id."',  '".$emailid."',  '".$name."'
);";
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
if($connection->query($sql))
{
	session_start();
	$_SESSION['id']=$id;
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
$_SESSION['score']=0;
echo '1';
}
}
else
echo '0';


?>

