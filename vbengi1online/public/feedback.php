<?php

    require_once "/home1/enginee8/public_html/Engineer2016/VirtualBounty/include/helpers.php";

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