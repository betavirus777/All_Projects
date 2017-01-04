<?php

    // configuration
    require("../includes/config.php"); 
    
    CS50::query("CREATE DATABASE ?", 'pset7');
    CS50::query("USE ?", 'pset7');
    $ret = value(CS50::query("SELECT count(*) FROM information_schema.TABLES WHERE TABLE_NAME = 'users'"), 'count(*)');
    if($ret == 0)
    {
        print("Users Table Not Found");
    }
    
    $ret = value(CS50::query("SELECT count(*) FROM information_schema.TABLES WHERE TABLE_NAME = 'portfolios'"), 'count(*)');
    if($ret == 0)
    {
        print("Portfolios Table Not Found");
    }
    
    $ret = value(CS50::query("SELECT count(*) FROM information_schema.TABLES WHERE TABLE_NAME = 'history'"), 'count(*)');
    if($ret == 0)
    {
        print("History Table Not Found");
    }
    
    if(empty($_SESSION["id"]))
    {
        apoogize("Invalid User!");
        exit;
    }
    $id = $_SESSION["id"];
    $rows = CS50::query("SELECT * FROM portfolios WHERE user_id = ?", $id);
    $rows1 = CS50::query("SELECT cash FROM users WHERE id = ?", $id);
    $cashs = $rows1[0];
    $cash = $cashs["cash"];

    $positions = [];
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
            "name" => $stock["name"],
            "price" => $stock["price"],
            "shares" => $row["shares"],
            "symbol" => $row["symbol"]
            ];
        }
    }

    render("portfolio.php", ["title" => "Portfolio", "positions" => $positions, "cash" => $cash]);

?>
