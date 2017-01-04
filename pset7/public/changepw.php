<?php

    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("changepw_form.php", ["title" => "Change Password"]);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["pwo"]))
        {
            apologize("You must provide your password.");
        }
        else if ((empty($_POST["pwn"]))||(empty($_POST["pwn1"])))
        {
            apologize("You must provide your password.");
        }
        else if($_POST["pwn"] !== $_POST["pwn1"])
        {
            apologize("Passwords does not match.");
        }
        
        $id = $_SESSION["id"];
        
        $rows = CS50::query("SELECT hash FROM users WHERE id = ?", $id);
        $row = $rows[0];
        if (password_verify($_POST["pwo"], $row["hash"]))
        {
            $ret = CS50::query("UPDATE users SET hash = ? WHERE id = ?", password_hash($_POST["pwn"], PASSWORD_DEFAULT), $id);
            render("display.php", ["title" => "Change Password", "message" => "Password Changed"]);
        }
        render("display.php", ["title" => "Change Password", "message" => "Old Password not matched"]);
        
    }
    
?>