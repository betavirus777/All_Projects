<?php

	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

	if (empty($_SESSION["id"]))
	{
		redirect('../public/login.php');
	}
	
	render("leaderboard_form.php", array("title" => "Leaderboard", "text" => "LEADERBOARD"));
    
    
?>