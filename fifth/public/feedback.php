<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("feedback_form.php", ["title" => "Remove Password", 'navbar' => 'pass']);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	
    }
    
?>