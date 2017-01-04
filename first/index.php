<!DOCTYPE html>
<html>
	<head>
		<title>Messenger</title>
	</head>
	
	<body>
		<form action="/login/" method="post">
			<pre>
			<br>Username : <input type="text" name="username">
			<br>Password : <input type="password" name="password">
			<br><input type = "submit" name="login" value = "Login">
			</pre>
		</form>
		
		<form action="/create_account/" method="post">
			<pre>
			<br><br>Don't Have an Account? <input type = "submit" name="create_account" value = "Create Account">
			</pre>
		</form>
		
	</body>
</html>