<?php

    // configuration
    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("sell_form.php", ["title" => "Sell"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sym = $_POST['symbol'];
        $cost = lookup($sym);
        $cost = $cost['price'];
        $shares = DB::queryFirstField("SELECT shares FROM portfolios WHERE (user_id = %i AND symbol = %s)",$_SESSION['id'], $sym);
        $cost = $cost*$shares;
        $date = date("d/m/Y h:i:sa");

        DB::startTransaction();
        $ret = DB::query("DELETE FROM portfolios WHERE user_id = %i AND symbol = %s", $_SESSION['id'], $sym);
        if($ret == 0)
        {
            DB::rollback();
            apologize("Error : USER_DOES_NOT_EXIST");
            exit;
        }
        $ret = DB::query("UPDATE users SET cash = cash + %i WHERE id = %i", $cost, $_SESSION['id']);
        DB::commit();
        
        $ret = DB::query("INSERT INTO history VALUES(%i, %i, %s, %i, %d, %s)", $_SESSION["id"], 2, $sym, $shares, $cost, $date);
        
        render("display.php", ["message" => "Transaction Successful"]);
    }