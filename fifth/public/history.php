<?php
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

	$ret = DB::query("SELECT * FROM history");
	
	render("history.php", ["rows" => $ret, "title" => "History", 'navbar' => 'stock']);
	
?>