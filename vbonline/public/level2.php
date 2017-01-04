<?php

	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";

	if (empty($_SESSION["id"]))
	{
		redirect('../public/login.php');
	}
	
	$en = DB::queryfirstfield("SELECT enable FROM start");
	$en1 = DB::queryfirstfield("SELECT enable FROM users WHERE id = %s", $_SESSION["id"]);
	if($en1 == 1)
	{
		render('display.php', array('message' => "You have been blocked by ADMIN", "text" => "LEVEL 2"));
	}
	if($en == 0)
	{
		render('display.php', array('message' => "Contest not started yet!", "text" => "LEVEL 2"));
	}
	else if($en == 1)
	{
	
	$id = $_SESSION['id'];
	
	$answers = DB::query("SELECT * FROM answers WHERE user_id = %i", $id);
	$answers = $answers[0];
	$sum = $answers['ans11'] + $answers['ans12'] + $answers['ans13'] + $answers['ans14'] + $answers['ans15'] + $answers['ans16'] + $answers['ans17'] + $answers['ans18'] + $answers['ans19'];

    if($sum < 5)
    {
    	render('display.php', array('message' => "Solve atleast 5 questions in Level 1 to enter Level 2.", 'text' => 'LEVEL 2'));
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("level2_form.php", array("title" => "Level 2", "text" => "LEVEL 2"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$answers = array(
    			"scoville scale",
    			'ggwp',
    			'adobe',
    			'power rangers',
    			'nicki minaj',
    			'r+l=j'
    	);
    	
    	$num = $_POST['number'];
    	$string = 'answer'.$num;
    	$string1 = 'ans2'.$num;

    	$id = $_SESSION['id'];
    	
    	if(strlen($_POST[$string]) > 50)
    	{
    		render('display.php', array('message' => "Input text very long."));
    	}
    	
    	
    	
    	if(strcasecmp($_POST[$string],$answers[$num-1]) == 0)
    	{
    		$time = time();
    		DB::startTransaction();
    		DB::query("UPDATE answers SET {$string1}=%i WHERE user_id = %i", 1, $id);
    		$answers = DB::query("SELECT * FROM answers WHERE user_id = %i", $id);
    		$answers = $answers[0];
    		$score = $answers['ans11']*10 + $answers['ans12']*10 + $answers['ans13']*10 + $answers['ans14']*10 + $answers['ans15']*10 + $answers['ans16']*10 + 
    					$answers['ans17']*10 + $answers['ans18']*10 + $answers['ans19']*10 + $answers['ans21']*100 + $answers['ans22']*100 + $answers['ans23']*100 + 
    					$answers['ans24']*100 + $answers['ans25']*100 + $answers['ans26']*100 + $answers['ans31']*1000;
    		DB::query("UPDATE leaderboard SET score=%i WHERE user_id = %i",$score, $id);
    		DB::query("UPDATE leaderboard SET time=%s WHERE user_id = %i",$time, $id);
    		DB::commit();
    		
    		$answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC");
    		
    		$count = 0;
    		$_SESSION['position'] = 0;
    		foreach($answers as $row)
    		{
    			$count = $count + 1;
    			if($row['user_id'] == $id)
    				$_SESSION['position'] = $count;
    		}
    		render('display.php', array('message' => "Correct Answer!"));
    	}
    	else
    	{
    		render('display.php', array('message' => "Wrong Answer, try again!!<br>Keep checking <a href='https://www.facebook.com/ietnitk/'>IET NITK</a> for Hints.<br>Hints will be disclosed only on demand."));
    	}
    		
    }
	}
	
	else
	{
		render('display.php', array('message' => "Contest Ended!!"));
	}
    
?>