<?php

    require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("login_form.php", array("title" => "Log In"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["roll"]))
        {
            render('display.php', array('message' => "You must provide your Roll No."));
        }
        else if (empty($_POST["password"]))
        {
            render('display.php', array('message' => "You must provide your password."));
        }
        
        if((strlen($_POST["roll"])>20)||(strlen($_POST["password"])>30))
        {
        	render('display.php', array('message' => "Input text very long."));
        }
        
        $rows = DB::query("SELECT * FROM users WHERE roll = %s", $_POST["roll"]);

        if (count($rows) == 1)
        {
            $row = $rows[0];

            if ($_POST["password"] == $row["hash"])
            {
                $_SESSION["id"] = $row["id"];
                $id = $_SESSION["id"];
                $_SESSION["username"] = $row["username"];
                
                $answers = DB::query("SELECT * FROM leaderboard ORDER BY score DESC, time ASC");
                
                $count = 0;
                foreach($answers as $row)
                {
                	$count = $count + 1;
                	if($row['user_id'] == $id)
                		$_SESSION['position'] = $count;
                }

                render('main.php', array('title' => 'Stock and Password Manager'));
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