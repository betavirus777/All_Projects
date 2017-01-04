<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("quote_form.php", ["title" => "Quote"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["symbol"]))
            apologize("Please enter the symbol.");
            
        $stock = lookup($_POST["symbol"]);
        if($stock == false)
            apologize("Invalid symbol.");
            
        render("quote_result.php", $stock);
    }
    
    else
        apologize("Something went wrong... Please try again");

?>
