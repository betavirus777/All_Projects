<?php 
	
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";
	
	render('main.php', ['title' => 'Stock and Password Manager', 'navbar' => '']);
	
?>