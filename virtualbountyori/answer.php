
<?php
session_start();
$answers = array(
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
);
$answers2 = array(
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat',
'Cat'
);

$servername = "mysql1.000webhost.com";
$username = "a4823676_admin";
$password = "qwe123!";
$dbname = "a4823676_dbmain";
$connection = new mysqli($servername, $username, $password, $dbname);
$id=$_POST['id'];
$answer=$_POST['answer'];
if($id[0]=='0')
{
$num=(ord($id[1])-49)*2+(ord($id[2])-48);
if(strcasecmp($answers2[$num-1],$answer)==0)
{
	$_SESSION['score']=$_SESSION['score']+10;
	$command="UPDATE  `a4823676_dbmain`.`participate` SET  `score` =  '".$_SESSION['score']."' WHERE CONVERT(  `participate`.`id` USING utf8 ) =  '".$_SESSION['id']."' LIMIT 1 ;";
	if($connection->query($command))
	{
	$_SESSION['x'.$id[0].$id[1]]++;
	echo '1';
	}
}
else
echo '0';
}
else if($id=='final')
{
	if(strcasecmp('cat',$answer)==0)
{	echo "data";
	$_SESSION['score']=$_SESSION['score']+20;
	$command="UPDATE  `a4823676_dbmain`.`participate` SET  `score` =  '".$_SESSION['score']."' WHERE CONVERT(  `participate`.`id` USING utf8 ) =  '".$_SESSION['id']."' LIMIT 1 ;";
	if($connection->query($command))
	{
	echo '1';
	}
}
else
echo '0';
}
else
{
$num=(ord($id[0])-49)*3+(ord($id[1])-48);
if(strcasecmp($answers[$num-1],$answer)==0)
{
	$_SESSION['score']=$_SESSION['score']+5;
	$command="UPDATE  `a4823676_dbmain`.`participate` SET  `score` =  '".$_SESSION['score']."' WHERE CONVERT(  `participate`.`id` USING utf8 ) =  '".$_SESSION['id']."' LIMIT 1 ;";
	if($connection->query($command))
	{
	$_SESSION['x'.$id[0]]++;
	echo '1';
	}
}
else
echo '0';
}

?>

