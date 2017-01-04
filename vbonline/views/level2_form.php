<?php 
	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM answers WHERE user_id = %i", $id);
	$answers = $answers[0];
	
	$en = DB::queryfirstfield("SELECT enable FROM start");
?>

<div class='container text-center'>
		
		<div class="panel-group" id="accordion">
			
			<?php if ($answers['ans21'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans21'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase1" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 1 : 100pts</h4></a>
				</div>
				<div id="collpase1" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_1.JPG' ><br></center>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans22'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans22'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase2" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 2 : 100pts</h4></a>
				</div>
				<div id="collpase2" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_2.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans23'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans23'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase3" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 3 : 100pts</h4></a>
				</div>
				<div id="collpase3" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_3.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans24'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans24'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase4" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 4 : 100pts</h4></a>
				</div>
				<div id="collpase4" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_4.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans25'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans25'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase5" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 5 : 100pts</h4></a>
				</div>
				<div id="collpase5" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_5.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans26'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans26'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase6" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 6 : 100pts</h4></a>
				</div>
				<div id="collpase6" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level2.php' method='post'>
							<center><img src='/public/img/vb_l2_6.JPG'></center><br>
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
				</div>
			</div>
			
		</div>
</div>