<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['i'];
$i=(ord($id[0])-49)*3+(ord($id[1])-48);
echo $i;
?>
</body>
</html>