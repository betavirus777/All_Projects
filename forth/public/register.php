<?php

    // configuration
    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["email"]))
        {
        	apologize("You must provide your email.");
        }
        else if($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("Passwords does not match.");
        }
        
        $ret = DB::query("SELECT * FROM users WHERE username = %s", $_POST['username']);

        if(count($ret) != 0)
        {
            apologize("Username Already Exists!");
        }
        else
        {
        	$ret = DB::insertIgnore('users', array(
        			'username' => $_POST['username'],
        			'hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        			'email' => $_POST['email'],
        			'cash' => 10000.0
        	));
            $id = DB::queryFirstField("SELECT id FROM users WHERE username = %s", $_POST['username']);
           
            $_SESSION['id'] = $id;
            $_SESSION["username"] = $_POST['username'];
            
            redirect("/public");
        }
    }
    
    else
        apologize("Something went wrong... Please try again");

?>