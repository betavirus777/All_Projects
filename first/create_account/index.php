<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Create Account</title>
	</head>
	<body>
		
		<form action="/create_account/" method="post">
			<pre>
			<br>First Name : <input type="text" name="FirstName">
			<br>Last Name : <input type="text" name="LastName">
			<br>Email : <input type="email" name="Email">
			<br>Password : <input type="password" name="Password1">
			<br>Password Again : <input type="password" name="Password2">
			<br>State : <input type="text" name="State">
			<br>Country : <input type="text" name="Country">
			<br>Phone Number : <input type="text" name="Phone_Number">
			<br><input type="submit" name="Submit" Value="Create Account">
			</pre>
		</form>
		
	</body>
</html>

<?php

	require_once($_SERVER['DOCUMENT_ROOT'].'/php/php_functions.php');

	$hn = 'localhost';
	$un = 'root';
	$pw = '';
	$db = 'accounts';
	
	$conn = new mysqli($hn, $un, $pw);
	if ($conn->connect_error)
		echo "<br>$conn->connect_error";

	$query = "CREATE DATABASE $db";
	$result = $conn->query($query);
	
	if(empty($_POST['FirstName'])||empty($_POST['LastName'])||empty($_POST['Email'])||empty($_POST['Password1'])
			||empty($_POST['Password2'])||empty($_POST['State'])||empty($_POST['Country'])||empty($_POST['Phone_Number']))
	{
		write_error("Please fill all the details!");
		write_previous("/create_account/");
		header("Location: /error/error.php");
		exit();
	}
	else 
	{
		echo "Done!!";
		exit();
	}
	
	write_error("Please fill all the details!");
	write_previous("/create_account/");
	header("Location: /error/error.php");
	exit();

?>