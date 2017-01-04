<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("login_form.php", array("title" => "Log In"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["email"]))
        {
            render('display.php', array('message' => "You must provide your Email."));
        }
        else if (empty($_POST["password"]))
        {
            render('display.php', array('message' => "You must provide your password."));
        }
        
        if((strlen($_POST["email"])>50)||(strlen($_POST["password"])>50))
        {
        	render('display.php', array('message' => "Input text very long."));
        }
        
        $rows = DB::query("SELECT * FROM users WHERE email = %s", $_POST["email"]);

        if (count($rows) == 1)
        {
            $row = $rows[0];

            if ($_POST["password"] == $row["password"])
            {
                $_SESSION["id"] = $row["id"];
                $id = $_SESSION["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["name"] = $row["name"];

                render('main.php', array('title' => ''));
            }
        }

        render('display.php', array('message' => "Invalid username and/or password."));
    }
    
    else
    {
    	render('display.php', array('message' => "ERROR : login.php"));
    	exit;
    }

?>