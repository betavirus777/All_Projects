<?php 
	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM answers WHERE user_id = %i", $id);
	$answers = $answers[0];
	
	$en = DB::queryfirstfield("SELECT enable FROM start");
?>

<div class='container text-center'>
		
		<div class="panel-group" id="accordion">
			
			<?php if ($answers['ans31'] == 1): ?><div class="panel panel-success"><?php endif ?>
			<?php if($answers['ans31'] == 0):?><div class="panel panel-info"><?php endif ?>
				<div class="panel-heading">
					<a href="#collpase1" data-toggle="collapse" data-parent="accordion"><h4 class="panel-title text-left">Question 1 : 1000pts</h4></a>
				</div>
				<div id="collpase1" class="panel-collapse collapse in">
					<div class="panel-body">
						<form action='/public/level3.php' method='post'>
							<center><img src='/public/img/vb_l3_1.JPG' ><br></center>
							<input type='hidden' name='number' value='1'>
							<?php if ($answers['ans31'] == 1): ?><h4><p>Status : Submitted</p></h4><?php endif ?>
							<?php if($answers['ans31'] == 0):?><h4><p>Status : Not Submitted</p></h4>
							<?php if ($en != 2):?>
							<input type='text' class='form-control' id='answer1' name='answer1' placeholder='Final Level Answer 1'><br>
							<button type='submit' class='btn btn-warning btn-sm' id='b1'><span class='glyphicon glyphicon-log-in'></span> Check</button><br>
							<?php endif ?>
							<?php endif ?>
						</form>
					</div>
				</div>
			</div>
			
		</div>
</div>