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
			<h2>Level 2</h2>
		</header>
		
 	<div class='text-center'>
    	<p>Please read the <a href="/views/instructions.php#two">Instructions</a></p>
	</div>
	<br><br>
	<section>
		<div class="row uniform 50%">
			<h2>Question 1 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans21) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img1' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q1.jpg' id='img1'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 1)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='1'>
				<?php if ($answers['ans21'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans21'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer1' name='answer1' placeholder='Level 2 Answer 1'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b1'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 2 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans22) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img2' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q2.jpg' id='img2'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 2)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='2'>
				<?php if ($answers['ans22'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans22'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer2' name='answer2' placeholder='Level 2 Answer 2'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b2'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 3 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans23) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img3' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q3.jpg' id='img3'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 3)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='3'>
				<?php if ($answers['ans23'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans23'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer3' name='answer3' placeholder='Level 2 Answer 3'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b3'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 4 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans24) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img4' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q4.jpg' id='img4'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 4)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='4'>
				<?php if ($answers['ans24'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans24'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer4' name='answer4' placeholder='Level 2 Answer 4'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b4'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 5 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans25) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img5' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q5.jpg' id='img5'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 5)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='5'>
				<?php if ($answers['ans25'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans25'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer5' name='answer5' placeholder='Level 2 Answer 5'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b5'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 6 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans26) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img6' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q6.jpg' id='img6'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 6)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='6'>
				<?php if ($answers['ans26'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans26'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer6' name='answer6' placeholder='Level 2 Answer 6'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b6'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 7 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans27) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img7' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q7.jpg' id='img7'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 7)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='7'>
				<?php if ($answers['ans27'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans27'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer7' name='answer7' placeholder='Level 2 Answer 7'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b7'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 8 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans28) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img8' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q8.jpg' id='img8'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 8)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='8'>
				<?php if ($answers['ans28'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans28'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer8' name='answer8' placeholder='Level 2 Answer 8'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b8'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 9 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans29) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img9' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q9.jpg' id='img9'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 9)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='9'>
				<?php if ($answers['ans29'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans29'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer9' name='answer9' placeholder='Level 2 Answer 9'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b9'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 10 :<br>25pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans210) FROM answers");?> people solved</h2>
			<form action='/public/level2.php#img10' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l2q10.jpg' id='img10'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 10)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='10'>
				<?php if ($answers['ans210'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans210'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer10' name='answer10' placeholder='Level 2 Answer 10'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b10'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
	</section>
	
	</div>
</div>
