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
			<h2>Level 1</h2>
		</header>
		
 	<div class='text-center'>
    	<p>Please read the <a href="/views/instructions.php#two">Instructions</a></p>
	</div>
	<br><br>
	<section>
		<div class="row uniform 50%">
			<h2>Question 1 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans11) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img1' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q1.jpg' id='img1'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 1)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='1'>
				<?php if ($answers['ans11'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans11'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer1' name='answer1' placeholder='Level 1 Answer 1'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b1'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 2 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans12) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img2' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q2.jpg' id='img2'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 2)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='2'>
				<?php if ($answers['ans12'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans12'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer2' name='answer2' placeholder='Level 1 Answer 2'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b2'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 3 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans13) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img3' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q3.jpg' id='img3'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 3)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='3'>
				<?php if ($answers['ans13'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans13'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer3' name='answer3' placeholder='Level 1 Answer 3'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b3'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 4 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans14) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img4' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q4.jpg' id='img4'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 4)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='4'>
				<?php if ($answers['ans14'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans14'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer4' name='answer4' placeholder='Level 1 Answer 4'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b4'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 5 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans15) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img5' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q5.jpg' id='img5'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 5)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='5'>
				<?php if ($answers['ans15'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans15'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer5' name='answer5' placeholder='Level 1 Answer 5'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b5'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 6 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans16) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img6' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q6.jpg' id='img6'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 6)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='6'>
				<?php if ($answers['ans16'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans16'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer6' name='answer6' placeholder='Level 1 Answer 6'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b6'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 7 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans17) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img7' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q7.jpg' id='img7'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 7)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='7'>
				<?php if ($answers['ans17'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans17'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer7' name='answer7' placeholder='Level 1 Answer 7'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b7'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 8 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans18) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img8' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q8.jpg' id='img8'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 8)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='8'>
				<?php if ($answers['ans18'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans18'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer8' name='answer8' placeholder='Level 1 Answer 8'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b8'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 9 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans19) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img9' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q9.jpg' id='img9'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 9)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='9'>
				<?php if ($answers['ans19'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans19'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer9' name='answer9' placeholder='Level 1 Answer 9'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b9'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>
		
		<div class="row uniform 50%">
			<h2>Question 10 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans110) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img10' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q10.jpg' id='img10'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 10)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='10'>
				<?php if ($answers['ans110'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans110'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer10' name='answer10' placeholder='Level 1 Answer 10'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b10'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 11 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans111) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img11' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q11.jpg' id='img11'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 11)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='11'>
				<?php if ($answers['ans111'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans111'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer11' name='answer11' placeholder='Level 1 Answer 11'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b11'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 12 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans112) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img12' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q12.jpg' id='img12'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 12)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='12'>
				<?php if ($answers['ans112'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans112'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer12' name='answer12' placeholder='Level 1 Answer 12'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b12'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 13 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans113) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img13' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q13.jpg' id='img13'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 13)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='13'>
				<?php if ($answers['ans113'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans113'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer13' name='answer13' placeholder='Level 1 Answer 13'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b13'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 14 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans114) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img14' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q14.jpg' id='img14'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 14)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='14'>
				<?php if ($answers['ans114'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans114'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer14' name='answer14' placeholder='Level 1 Answer 14'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b14'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 15 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans115) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img15' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q15.jpg' id='img15'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 15)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='15'>
				<?php if ($answers['ans115'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans115'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer15' name='answer15' placeholder='Level 1 Answer 15'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b15'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 16 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans116) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img16' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q16.jpg' id='img16'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 16)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='16'>
				<?php if ($answers['ans116'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans116'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer16' name='answer16' placeholder='Level 1 Answer 16'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b16'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 17 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans117) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img17' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q17.jpg' id='img17'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 17)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='17'>
				<?php if ($answers['ans117'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans117'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer17' name='answer17' placeholder='Level 1 Answer 17'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b17'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 18 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans118) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img18' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q18.jpg' id='img18'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 18)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='18'>
				<?php if ($answers['ans118'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans118'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer18' name='answer18' placeholder='Level 1 Answer 18'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b18'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 19 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans119) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img19' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q19.jpg' id='img19'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 19)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='19'>
				<?php if ($answers['ans119'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans119'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer19' name='answer19' placeholder='Level 1 Answer 19'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b19'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
		<div class="row uniform 50%">
			<h2>Question 20 :<br>10pts<br> <?php echo DB::queryfirstfield("SELECT SUM(ans120) FROM answers");?> people solved</h2>
			<form action='/public/level1.php#img20' method='post'>
				<div class="12u$"><span class="image fit"><img src='/images/l1q20.jpg' id='img20'><br></span></div>
				<?php if(isset($num)):?>
				<?php if (($num == 20)&&(!empty($message))):?>
				<?php echo "<h2>{$message}</h2>";?>
				<?php endif ?>
				<?php endif ?>
				<input type='hidden' name='number' value='20'>
				<?php if ($answers['ans120'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
				<?php if($answers['ans120'] == 0):?><h4><p>Status : Not Submitted</p></h4>
				<?php if ($en != 2):?>
				<input type='text' class='form-control' id='answer20' name='answer20' placeholder='Level 1 Answer 20'><br>
				<button type='submit' class='btn btn-warning btn-sm' id='b20'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
				<?php endif ?>
				<?php endif ?>
			</form>
		</div>	
		
	</section>
	
	</div>
</div>
