<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        
        render("buy_form.php", ["title" => "Buy"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!lookup($_POST['symbol']))
        {
            apologize("Error : Invaid_Symbol.");
            exit;
        }
        if(!preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("Error : Invaid_Share_Value.");
            exit;
        }
        
        $user_balance = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
        if(!$user_balance)
        {
            apologize("Error : Session_Expired.");
            exit;
        }
        $user_balance = $user_balance[0];
        $user_balance = $user_balance['cash'];
        
        $share = lookup($_POST['symbol']);
        $symbol = $share['symbol'];
        $price = $share['price'];
        $cost = $price*$_POST["shares"];
        
        if($user_balance < $cost)
        {
            apologize("Error : Not_Enough_Cash");
            exit;
        }
        
        $maxid = CS50::query("SELECT max(id) FROM portfolios");
        $maxid = $maxid[0];
        $maxid = $maxid['max(id)'];
        $maxid = $maxid + 1;
        
        $ret = CS50::query("INSERT INTO portfolios VALUES(?, ?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + ?", $maxid, $_SESSION["id"], $symbol, $_POST["shares"], $_POST["shares"]);
        $ret = CS50::query("INSERT INTO history VALUES(?, ?, ?, ?, ?, ?)", $_SESSION["id"], "BUY", $symbol, $_POST["shares"], $price, date("F j, Y, g:i a"));
        $ret = CS50::query("UPDATE users SET cash = cash - ? WHERE id = ?", $cost, $_SESSION['id']);
        render("display.php", ["message" => "Shares Bought Successfully."]);
    }
    
?>