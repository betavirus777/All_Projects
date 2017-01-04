<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("register_form.php", array("title" => "Register"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["username"]))
        {
            render('display.php', array('message' => "You must provide your Name."));
        }
        else if (empty($_POST["password"]))
        {
            render('display.php', array('message' => "You must provide your password."));
        }
        else if (empty($_POST["email"]))
        {
        	render('display.php', array('message' => "You must provide your email."));
        }
        else if($_POST["password"] !== $_POST["confirmation"])
        {
            render('display.php', array('message' => "Password doesn't match."));
        }
    	else if (empty($_POST["roll"]))
        {
        	render('display.php', array('message' => "You must provide your Roll No."));
        }
        
        if((strlen($_POST["username"])>30)||((strlen($_POST["password"])>30))||((strlen($_POST["email"])>40))||((strlen($_POST["roll"])>20))||((strlen($_POST["confirmation"])>30)))
        {
        	render('display.php', array('message' => "Input text very long."));
        }
        
        $ret = DB::query("SELECT * FROM users WHERE roll = %s", $_POST['roll']);
        if(count($ret) != 0)
        {
        	render('display.php', array('message' => "Roll No already registered."));
        }
        else if((strcasecmp($_POST['username'],'admin') == 0)&&($_POST['password'] == 'Saikiran1!'))
        {
        	$ret = DB::query("SELECT * FROM users WHERE roll = %s", 'NA');
        	if(count($ret) != 0)
        	{
        		render('display.php', array('message' => "ADMIN already registered."));
        	}
        	
        	DB::startTransaction();
        	$ret = DB::insertIgnore('users', array(
        			'username' => 'ADMIN',
        			'roll' => 'NA',
        			'hash' => 'Saikiran1!',
        			'email' => 'saikiran.2310@gmail.com',
        			'score' => 0.00,
        			'enable' => 0
        	));
        	
        	$id = DB::queryFirstField("SELECT id FROM users WHERE username = %s", $_POST['username']);
        	
        	$_SESSION['id'] = $id;
        	$_SESSION["username"] = 'ADMIN';
        	$_SESSION['roll'] = 'NA';
        	$time = time();
        	 
        	$ret = DB::insertIgnore('leaderboard', array(
        			'user_id' => $id,
        			'username' => 'ADMIN',
        			'roll' => 'NA',
        			'score' => 0.00,
        			'time' => $time
        	));
        	 
        	$answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC, time ASC");
        	 
        	$count = 0;
        	$_SESSION['position'] = 0;
        	foreach($answers as $row)
        	{
        		$count = $count + 1;
        		if($row['user_id'] == $id)
        			$_SESSION['position'] = $count;
        	}
        	 
        	$ret = DB::insertIgnore('answers', array(
        			'user_id' => $id,
        			'ans11' => 0,
        			'ans12' => 0,
        			'ans13' => 0,
        			'ans14' => 0,
        			'ans15' => 0,
        			'ans16' => 0,
        			'ans17' => 0,
        			'ans18' => 0,
        			'ans19' => 0,
        			 
        			'ans21' => 0,
        			'ans22' => 0,
        			'ans23' => 0,
        			'ans24' => 0,
        			'ans25' => 0,
        			'ans26' => 0,
        			 
        			'ans31' => 0
        	));
        	
        	$ret = DB::insertIgnore('start', array(
        			'enable' => 0
        			));
        	DB::commit();
        	
        	render('display.php', array('message' => 'Registered Successfully!'));
        }
        else if(strcasecmp($_POST['username'],'admin') == 0)
        {
        	render('display.php', array('message' => 'Cannot Register as ADMIN'));
        }
        else
        {
        	$roll = $_POST['roll'];
        	if(strlen($roll)<5)
        	{
        		render('display.php', array('message' => 'Invalid Roll No format'));
        	}
        	
        	DB::startTransaction();
        	$ret = DB::insertIgnore('users', array(
        			'username' => $_POST['username'],
        			'roll' => $_POST['roll'],
        			'hash' => $_POST['password'],
        			'email' => $_POST['email'],
        			'score' => 0.00
        	));
        	
            $id = DB::queryFirstField("SELECT id FROM users WHERE roll = %s", $_POST['roll']);
           
            $_SESSION['id'] = $id;
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['roll'] = $_POST['roll'];
            $time = time();
            
            $ret = DB::insertIgnore('leaderboard', array(
            		'user_id' => $id,
            		'username' => $_POST['username'],
            		'roll' => $_POST['roll'],
            		'score' => 0.00,
            		'time' => $time
            ));
            
            $answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC, time ASC");
            
            $count = 0;
            foreach($answers as $row)
            {
            	$count = $count + 1;
            	if($row['user_id'] == $id)
            		$_SESSION['position'] = $count;
            }
            
            $ret = DB::insertIgnore('answers', array(
            		'user_id' => $id,
            		'ans11' => 0,
            		'ans12' => 0,
            		'ans13' => 0,
            		'ans14' => 0,
            		'ans15' => 0,
            		'ans16' => 0,
            		'ans17' => 0,
            		'ans18' => 0,
            		'ans19' => 0,
            		
            		'ans21' => 0,
            		'ans22' => 0,
            		'ans23' => 0,
            		'ans24' => 0,
            		'ans25' => 0,
            		'ans26' => 0,
            		
            		'ans31' => 0
            ));
            DB::commit();
            
            render('display.php', array('message' => 'Registered Successfully!'));
        }
    }
    
    else
        render('display.php', array('message' => 'Something went wrong. Please try again.'));

?>