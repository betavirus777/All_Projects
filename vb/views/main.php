<?php require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php"; ?>

<div class='container text-center'>
		
	<center><img src='/public/img/i1.PNG'><br></center>
	
	<center><img src='/public/img/i2.PNG'><br></center>
	
	<center><img src='/public/img/i3.PNG'><br></center>
</div>
<br><br>

<div class='container text-center'>

<?php if ((!empty($_SESSION["username"]))&&($_SESSION["username"] == 'ADMIN')): ?>
<form action='/public/admin.php' method='post'>
	<input type='hidden' name='number' value='1'>
	<button type='submit' class='btn btn-error btn-sm' id='b1'><span class='glyphicon glyphicon-log-in'></span> Clear Database</button><br>
</form>

<?php $en = DB::queryfirstfield("SELECT enable FROM start");?>
<?php if ($en == 0 || $en == 2):?>
<form action='/public/admin.php' method='post'>
	<input type='hidden' name='number' value='2'>
	<button type='submit' class='btn btn-error btn-sm' id='b2'><span class='glyphicon glyphicon-log-in'></span> Start</button><br>
</form>
<?php endif ?>

<?php if ($en == 1):?>
<form action='/public/admin.php' method='post'>
	<input type='hidden' name='number' value='3'>
	<button type='submit' class='btn btn-error btn-sm' id='b3'><span class='glyphicon glyphicon-log-in'></span> Stop</button><br>
</form>
<?php endif ?>

<form action='/public/admin.php' method='post'>
	<input type='hidden' name='number' value='4'>
	<input type='text' class='form-control' name='roll' placeholder='Roll No'><br>
	<button type='submit' class='btn btn-error btn-sm' id='b4'><span class='glyphicon glyphicon-log-in'></span> Block</button><br>
</form>

<?php endif ?>

</div>