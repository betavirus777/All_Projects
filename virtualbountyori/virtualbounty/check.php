
<?php

$servername = "mysql1.000webhost.com";
$username = "a4823676_admin";
$password = "qwe123!";
$dbname = "a4823676_dbmain";
$id=$_POST['id'];

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$result=$connection->query("SELECT  `id` 
FROM  `participate` 
WHERE  `id` = CONVERT( _utf8 '".$id."'
USING latin1 ) 
COLLATE latin1_general_ci
LIMIT 0 , 30");

if(mysqli_num_rows($result) == 0) {
	echo '1';
}


?>

