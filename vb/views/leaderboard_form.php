<?php 
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC, time ASC");
	
	$count = 0;
	$_SESSION['position'] = 0;
	foreach($answers as $row)
	{
		$count = $count + 1;
		if($row['user_id'] == $id)
			$_SESSION['position'] = $count;
	}
	$pos = $_SESSION['position'];
	
	echo
	<<<_END
	<h3 class='text-center'>Your Position : {$pos}</h3><br>
	<div class='container text-left'>
    <table class="table table-striped">
	<thead>
    <tr>
		<th>Position</th>
		<th>Roll No</th>
        <th>Name</th>
        <th>Score</th>
		<th>Recent Submission</th>
    </tr>
    </thead>
    <tbody>
_END;
	
	$count = 0;
	foreach($answers as $row)
	{
		$count = $count + 1;
		$username = $row['username'];
		$score = $row['score'];
		$roll = $row['roll'];
		$time = $row['time'];
		$time = date('H:i:s', $time);
			echo
			<<<_END
	
    <tr>
    	<td>$count</td>
    	<td>$roll</td>
        <td>$username</td>
        <td>$score</td>
        <td>$time</td>
    </tr>
_END;
	}
	
echo
    <<<_END
    </tbody>
    </table>
</div>
    
_END;
?>