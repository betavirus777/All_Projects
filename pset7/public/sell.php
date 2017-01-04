<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        $id = $_SESSION['id'];
        $rows = CS50::query("SELECT symbol FROM portfolios WHERE user_id = ?", $id);

        render("sell_form.php", ["title" => "Sell", "rows" => $rows]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sym = $_POST['symbol'];
        $cost = lookup($sym);
        $cost = $cost['price'];
        $shares = CS50::query("SELECT shares FROM portfolios WHERE (user_id = ? AND symbol = ?)",$_SESSION['id'], $sym);
        $shares = $shares[0];
        $shares = $shares['shares'];
        $cost = $cost*$shares;

        $ret = CS50::query("START TRANSACTION");
        $ret = CS50::query("DELETE FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION['id'], $sym);
        if($ret == 0)
        {
            CS50::query("ROLLBACK");
            apologize("Error : USER_DOES_NOT_EXIST");
            exit;
        }
        $ret = CS50::query("UPDATE users SET cash = cash + ? WHERE id = ?", $cost, $_SESSION['id']);
        $ret = CS50::query("COMMIT");
        render("display.php", ["message" => "Transaction Successful"]);
    }
