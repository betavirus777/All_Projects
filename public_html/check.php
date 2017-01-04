
<?php

$servername = "localhost";
$username = "a6950742_ph";
$password = "saikiran1";
$dbname = "a6950742_db1";
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

