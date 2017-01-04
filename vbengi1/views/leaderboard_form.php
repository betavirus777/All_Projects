<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>Leaderboard</h2>
		</header>
		<section>
		
<?php 
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";		
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC, time ASC");
	
	$count = 0;
	$_SESSION['position'] = 0;
	foreach($answers as $row)
	{
		$count = $count + 1;
		if($row['id'] == $id)
			$_SESSION['position'] = $count;
	}
	$pos = $_SESSION['position'];
	
	echo
	<<<_END
	<h2 class='text-center'>Your Position : {$pos}</h2><br>
    <div class="table-wrapper">
									<table>
										<thead>
											<tr>
		<th>Position</th>
        <th>Username</th>
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
		$time = $row['time'];
		$time = date('H:i:s', $time);
			echo
			<<<_END
	
    <tr>
    	<td>$count</td>
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
</section>
</div>
</div>
    
_END;
?>