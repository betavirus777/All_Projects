<?php 
	
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";
	
	if (empty($_SESSION["id"]))
	{
		redirect('../public/login.php');
	}
	if(($_SESSION["username"]) != 'ADMIN' )
	{
		redirect('../public/login.php');
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "GET")
	{
		render("admin_form.php", array("title" => "ADMIN"));
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST['number'] == 1)
		{
			DB::startTransaction();
			DB::query("DROP TABLE users");
			DB::query("DROP TABLE leaderboard");
			DB::query("DROP TABLE answers");
			DB::query("DROP TABLE start");
			DB::commit();
			
			logout();
			
			redirect('../');
			exit;
		}
		
		else if($_POST['number'] == 2)
		{
			DB::startTransaction();
			DB::query("UPDATE start SET enable = %i", 1);
			DB::commit();
			
			render('display.php', array('message' => 'Contest Started!'));
		}
		
		else if($_POST['number'] == 3)
		{
			DB::startTransaction();
			DB::query("UPDATE start SET enable = %i", 2);
			DB::commit();
			
			render('display.php', array('message' => 'Contest Ended!'));
		}
		
		else if($_POST['number'] == 4)
		{
			$id = DB::queryFirstField("SELECT id FROM users WHERE username = %s", $_POST["username"]);
			
			DB::startTransaction();
			DB::query("UPDATE users SET enable = %i WHERE id = %s", 1,  $id);
			DB::query("DELETE FROM leaderboard WHERE id = %s", $id);
			DB::commit();
				
			render('display.php', array('message' => 'Blocked!'));
		}
	}
	
?>