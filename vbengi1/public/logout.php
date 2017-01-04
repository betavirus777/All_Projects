<?php

	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    logout();

    render('display.php', array('message' => 'Logged out Successfully.'));

?>
