<?php

	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";

	if (empty($_SESSION["id"]))
	{
		redirect('../public/login.php');
	}
	
	render("leaderboard_form.php", array("title" => "Leaderboard", "text" => "LEADERBOARD"));
    
    
?>