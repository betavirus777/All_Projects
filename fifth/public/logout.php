<?php

    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    logout();

    render('display.php', ['message' => 'Logged out Successfully.', 'navbar' => ''])

?>
