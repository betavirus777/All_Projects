<?php

    require_once "/home1/enginee8/public_html/Engineer2016/VirtualBounty/include/helpers.php";

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
            render('display.php', array('message' => "You must provide your Password."));
        }
        else if (empty($_POST["name"]))
        {
        	render('display.php', array('message' => "You must provide your Name."));
        }
        else if (empty($_POST["email"]))
        {
        	render('display.php', array('message' => "You must provide your email."));
        }
        else if (empty($_POST["phone"]))
        {
        	render('display.php', array('message' => "You must provide your Phone No."));
        }
        else if($_POST["password"] !== $_POST["confirmation"])
        {
            render('display.php', array('message' => "Password doesn't match."));
        }
        
        if((strlen($_POST["username"])>50)||(strlen($_POST["phone"])>15)||((strlen($_POST["password"])>50))||((strlen($_POST["email"])>50))||((strlen($_POST["name"])>50))||((strlen($_POST["confirmation"])>50)))
        {
        	render('display.php', array('message' => "Input text very long."));
        }
        
        $ret = DB::query("SELECT * FROM users WHERE username = %s", $_POST['username']);
        if(count($ret) != 0)
        {
        	render('display.php', array('message' => "Username already registered."));
        }
        $ret = DB::query("SELECT * FROM users WHERE email = %s", $_POST['email']);
        if(count($ret) != 0)
        {
        	render('display.php', array('message' => "Email already registered."));
        }
        else if((strcasecmp($_POST['username'],'admin') == 0)&&($_POST['password'] == 'Saikiran1!1'))
        {
        	$ret = DB::query("SELECT * FROM users WHERE username = %s", 'ADMIN');
        	if(count($ret) != 0)
        	{
        		render('display.php', array('message' => "ADMIN already registered."));
        	}
        	
        	DB::startTransaction();
        	$ret = DB::insertIgnore('users', array(
        			'username' => 'ADMIN',
        			'Name' => 'ADMIN',
        			'password' => 'Saikiran1!1',
        			'email' => 'saikiran.2310@gmail.com',
        			'phone' => '9035266874',
        			'score' => 0.00,
        			'enable' => 0
        	));
        	
        	$id = DB::queryFirstField("SELECT id FROM users WHERE username = %s", $_POST['username']);
        	
        	$_SESSION['id'] = $id;
        	$_SESSION["username"] = 'ADMIN';
        	$_SESSION['name'] = 'ADMIN';
        	$time = time();
        	 
        	$ret = DB::insertIgnore('leaderboard', array(
        			'id' => $id,
        			'username' => 'ADMIN',
        			'score' => 0.00,
        			'time' => $time
        	));
        	 
        	 
        	$ret = DB::insertIgnore('answers', array(
        			'id' => $id,
        			'ans11' => 0,
        			'ans12' => 0,
        			'ans13' => 0,
        			'ans14' => 0,
        			'ans15' => 0,
        			'ans16' => 0,
        			'ans17' => 0,
        			'ans18' => 0,
        			'ans19' => 0,
        			'ans110' => 0,
        			'ans111' => 0,
        			'ans112' => 0,
        			'ans113' => 0,
        			'ans114' => 0,
        			'ans115' => 0,
        			'ans116' => 0,
        			'ans117' => 0,
        			'ans118' => 0,
        			'ans119' => 0,
        			'ans120' => 0,
        			 
        			'ans21' => 0,
        			'ans22' => 0,
        			'ans23' => 0,
        			'ans24' => 0,
        			'ans25' => 0,
        			'ans26' => 0,
        			'ans27' => 0,
        			'ans28' => 0,
        			'ans29' => 0,
        			'ans210' => 0,
        			 
        			'ans31' => 0,
        			'ans32' => 0,
        			'ans33' => 0,
        			'ans34' => 0,
        			'ans35' => 0
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
        	
        	DB::startTransaction();
        	$ret = DB::insertIgnore('users', array(
        			'username' => $_POST['username'],
        			'name' => $_POST['name'],
        			'email' => $_POST['email'],
        			'phone' => $_POST['phone'],
        			'password' => $_POST['password'],
        			'score' => 0.00,
        			'enable' => 0
        	));
        	
            $id = DB::queryFirstField("SELECT id FROM users WHERE username = %s", $_POST['username']);
           
            $_SESSION['id'] = $id;
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['name'] = $_POST['name'];
            $time = time();
            
            $ret = DB::insertIgnore('leaderboard', array(
            		'id' => $id,
            		'username' => $_POST['username'],
            		'score' => 0.00,
            		'time' => $time
            ));
            
            
            $ret = DB::insertIgnore('answers', array(
        			'id' => $id,
        			'ans11' => 0,
        			'ans12' => 0,
        			'ans13' => 0,
        			'ans14' => 0,
        			'ans15' => 0,
        			'ans16' => 0,
        			'ans17' => 0,
        			'ans18' => 0,
        			'ans19' => 0,
        			'ans110' => 0,
        			'ans111' => 0,
        			'ans112' => 0,
        			'ans113' => 0,
        			'ans114' => 0,
        			'ans115' => 0,
        			'ans116' => 0,
        			'ans117' => 0,
        			'ans118' => 0,
        			'ans119' => 0,
        			'ans120' => 0,
        			 
        			'ans21' => 0,
        			'ans22' => 0,
        			'ans23' => 0,
        			'ans24' => 0,
        			'ans25' => 0,
        			'ans26' => 0,
        			'ans27' => 0,
        			'ans28' => 0,
        			'ans29' => 0,
        			'ans210' => 0,
        			 
        			'ans31' => 0,
        			'ans32' => 0,
        			'ans33' => 0,
        			'ans34' => 0,
        			'ans35' => 0
        	));
            DB::commit();
            
            render('display.php', array('message' => 'Registered Successfully!'));
        }
    }
    
    else
        render('display.php', array('message' => 'Something went wrong. Please try again.'));

?>