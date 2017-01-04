<?php

    require("../includes/config.php"); 
    
    $id = $_SESSION["id"];
    $rows = CS50::query("SELECT * FROM history WHERE user_id = ?", $id);
    
    $rows1 = CS50::query("SELECT cash FROM users WHERE id = ?", $id);
    $cashs = $rows1[0];
    $cash = $cashs["cash"];

    render("history_form.php", ["title" => "History", "data" => $rows, "cash" => $cash]);

?>
