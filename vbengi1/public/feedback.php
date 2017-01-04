<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("feedback_form.php", array("title" => "Feedback"));
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    }
    
    else
        render('display.php', array('message' => 'Something went wrong. Please try again.'));

?>