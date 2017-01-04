<?php 
	require_once "/home1/enginee8/public_html/Engineer2016/VirtualBounty/include/helpers.php";
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM answers WHERE id = %i", $id);
	$answers = $answers[0];
	
	$en = DB::queryfirstfield("SELECT enable FROM start");
?>

<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>FINAL LEVEL</h2>
		</header>
		
 	<div class='text-center'>
    	<p>Please read the <a href="/views/instructions.php#two">Instructions</a></p>
	</div>
	<br><br>
	<section>
		<div class="row uniform 50%">
			<h2>Question 1 :<br>50pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans31) FROM answers");?> people solved</h2>
			<form action='/public/level3.php#img1' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l3q1.jpg' id='img1'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 1)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='1'>
				<?php if ($answers['ans31'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans31'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer1' name='answer1' placeholder='Level 3 Answer 1'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b1'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 2 :<br>50pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans32) FROM answers");?> people solved</h2>
			<form action='/public/level3.php#img2' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l3q2.jpg' id='img2'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 2)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='2'>
				<?php if ($answers['ans32'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans32'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer2' name='answer2' placeholder='Level 3 Answer 2'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b2'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 3 :<br>50pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans33) FROM answers");?> people solved</h2>
			<form action='/public/level3.php#img3' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l3q3.jpg' id='img3'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 3)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='3'>
				<?php if ($answers['ans33'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans33'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer3' name='answer3' placeholder='Level 3 Answer 3'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b3'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 4 :<br>50pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans34) FROM answers");?> people solved</h2>
			<form action='/public/level3.php#img4' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l3q4.jpg' id='img4'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 4)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='4'>
				<?php if ($answers['ans34'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans34'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer4' name='answer4' placeholder='Level 3 Answer 4'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b4'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 5 :<br>50pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans35) FROM answers");?> people solved</h2>
			<form action='/public/level3.php#img5' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l3q5.jpg' id='img5'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 5)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='5'>
				<?php if ($answers['ans35'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans35'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer5' name='answer5' placeholder='Level 3 Answer 5'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b5'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
	</section>
	
	</div>
</div>
