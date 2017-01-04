<?php

	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

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
	else if(($en == 1)||($en == 2))
	{
		
		$id = $_SESSION['id'];
		
		$answers = DB::query("SELECT * FROM answers WHERE id = %i", $id);
		$answers = $answers[0];
		$sum = $answers['ans11'] + $answers['ans12'] + $answers['ans13'] + $answers['ans14'] + $answers['ans15'] + $answers['ans16'] + $answers['ans17'] + $answers['ans18'] + $answers['ans19'] + $answers['ans110']
				+ $answers['ans111'] + $answers['ans112'] + $answers['ans113'] + $answers['ans114'] + $answers['ans115'] + $answers['ans116'] + $answers['ans117'] + $answers['ans118'] + $answers['ans119'] + $answers['ans120'];
				
		if($sum < 15)
		{
			render('display.php', array('message' => "Solve atleast 15 questions in Level 1 to enter Level 2.", 'text' => 'LEVEL 2'));
		}

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("level2_form.php", array("title" => "Level 2", "text" => "LEVEL 2"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$answers = array(
    			"Zika virus",
"Monty Python",
"Tsar Bomba",
"Dracula",
"Elphias Doge",
"Cinderella",
"Shanta",
"Solomon",
"Hans Zimmer",
"Donald Trump"
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
    		DB::query("UPDATE answers SET {$string1}=%i WHERE id = %i", 1, $id);
    		$answers = DB::query("SELECT * FROM answers WHERE id = %i", $id);
    		$answers = $answers[0];
    		$score = $answers['ans11']*10 + $answers['ans12']*10 + $answers['ans13']*10 + $answers['ans14']*10 + $answers['ans15']*10 + $answers['ans16']*10 + 
    					$answers['ans17']*10 + $answers['ans18']*10 + $answers['ans19']*10 + $answers['ans110']*10 + $answers['ans111']*10 + $answers['ans112']*10 + $answers['ans113']*10 + $answers['ans114']*10 + $answers['ans115']*10 + $answers['ans116']*10 + 
    					$answers['ans117']*10 + $answers['ans118']*10 + $answers['ans119']*10 + $answers['ans120']*10
    					+ $answers['ans21']*25 + $answers['ans22']*25 + $answers['ans23']*25 + $answers['ans24']*25 + $answers['ans25']*25 + $answers['ans26']*25 + $answers['ans27']*25 + $answers['ans28']*25 + $answers['ans29']*25 + $answers['ans210']*25
    					+ $answers['ans31']*50 + $answers['ans32']*50 + $answers['ans33']*50 + $answers['ans34']*50 + $answers['ans35']*50;
    		DB::query("UPDATE leaderboard SET score=%i WHERE id = %i",$score, $id);
    		DB::query("UPDATE leaderboard SET time=%s WHERE id = %i",$time, $id);
    		DB::commit();
    		
    		$answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC");
    		
    		render("level2_form.php", array("title" => "Level 2", "text" => "LEVEL 2", "message" => '<strong><font color="#72ff00">Correct Answer!</font></strong>', 'num' => $num, 'pageid' => "#img".$num));
    	}
    	else
    	{
    		render("level2_form.php", array("title" => "Level 2", "text" => "LEVEL 2", "message" => '<strong><font color="#ff3b00">Wrong Answer!, Check <a target="_blank" href="https://www.facebook.com/virtualbounty/?fref=ts">Virtual Bounty FB Page</a> for clues.</font></strong>', 'num' => $num, 'pageid' => "#img".$num));
    	}
    		
    }
	}
    
?>