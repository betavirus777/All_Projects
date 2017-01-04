
<?php
session_start();
if($_SESSION[$_SESSION['current']]==3)
echo '1';
else if($_SESSION[$_SESSION['current']]==2&&$_POST['inner']==1)
echo '1';
?>

