<?php 
	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM answers WHERE user_id = %i", $id);
	$answers = $answers[0];
	
	$en = DB::queryfirstfield("SELECT enable FROM start");
?>

<div class='container text-center'>
		
		<div class="panel-group" id="accordion">
			
			<?php if ($answers['ans11'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans11'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase1" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 1 : 10pts</h4></a>
				</div>
				<div id="collpase1" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_1.JPG' ><br></center>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans12'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans12'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase2" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 2 : 10pts</h4></a>
				</div>
				<div id="collpase2" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_2.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans13'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans13'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase3" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 3 : 10pts</h4></a>
				</div>
				<div id="collpase3" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_3.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans14'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans14'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase4" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 4 : 10pts</h4></a>
				</div>
				<div id="collpase4" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_4.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans15'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans15'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase5" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 5 : 10pts</h4></a>
				</div>
				<div id="collpase5" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_5.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans16'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans16'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase6" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 6 : 10pts</h4></a>
				</div>
				<div id="collpase6" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_6.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans17'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans17'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase7" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 7 : 10pts</h4></a>
				</div>
				<div id="collpase7" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_7.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans18'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans18'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase8" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 8 : 10pts</h4></a>
				</div>
				<div id="collpase8" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_8.JPG'></center><br>
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
				</div>
			</div>
			
			<br>
			
			<?php if ($answers['ans19'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans19'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase9" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 9 : 10pts</h4></a>
				</div>
				<div id="collpase9" class="panel-collapse collapse">
					<div class="panel-body">
						<form action='/public/level1.php' method='post'>
							<center><img src='/public/img/vb_l1_9.JPG'></center><br>
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
				</div>
			</div>
			
		</div>
</div>