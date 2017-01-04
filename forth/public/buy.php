<?php

    // configuration
    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

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
        
        $user_balance = DB::query("SELECT cash FROM users WHERE id = %i", $_SESSION["id"]);
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
        $date = date("d/m/Y h:i:sa");
        
        if($user_balance < $cost)
        {
            apologize("Error : Not_Enough_Cash");
            exit;
        }
        
        $maxid = DB::queryFirstField("SELECT max(id) FROM portfolios");
        $maxid = $maxid + 1;
        
        DB::startTransaction();
        $ret = DB::query("INSERT INTO portfolios VALUES(%i, %i, %s, %i, %d) ON DUPLICATE KEY UPDATE shares = shares + %i", $maxid, $_SESSION["id"], $symbol, $_POST["shares"], $cost, $_POST["shares"]);
        $ret = DB::query("UPDATE users SET cash = cash - %i WHERE id = %i", $cost, $_SESSION['id']);
        DB::commit();
        
        $ret = DB::query("INSERT INTO history VALUES(%i, %i, %s, %i, %d, %s)", $_SESSION["id"], 1, $symbol, $_POST["shares"], $cost, $date);
        
        render("display.php", ["message" => "Shares Bought Successfully."]);
    }
    
?>