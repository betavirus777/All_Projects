<?php

    // configuration
    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    // log out current user, if any
    logout();

    // redirect user
    redirect("/");

?>
