<?php

	$string1 = file_get_contents("../text/write_error.txt");
	$string2 = file_get_contents("../text/write_previous.txt");
	
	echo 	
<<<_END
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Error</title>
	</head>
	<body>
		<pre>
		<br>$string1
		<form action="$string2" method="post">
			<br><input type="submit" name="error_submit" value="Go Back">
		</form>
		</pre>
	</body>
</html>
_END;


?>