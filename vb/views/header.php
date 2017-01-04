<?php require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php"; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<?php if (!empty($title)): ?>
            <title>Virtual Bounty: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Virtual Bounty</title>
        <?php endif ?>
		
		<link rel="stylesheet" href="/public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/public/css/bootstrap-theme.min.css">
		
		<style>
		body{
			padding-top: 40px;
		}
		h1, h2, h3, h4, h5, h6, p, div{
			
		}
		</style>
	</head>
	
	<body>
		
		<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-collapse'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a href="/" class="navbar-brand">Virtual Bounty</a>
				</div>
				
				<div class='collapse navbar-collapse' id='navbar-collapse'>
					<ul class="nav navbar-nav">
						<li><a href="/public/level1.php">Level 1</a></li>
						<li><a href="/public/level2.php">Level 2</a></li>
						<li><a href="/public/level3.php">Final Level</a></li>
						<li><a href="/public/leaderboard.php">Leaderboard</a></li>
						<?php if (empty($_SESSION["username"])): ?>
						<li><a href="/public/login.php">Login/Register</a></li>
						<?php endif ?>
						<?php if (!empty($_SESSION["username"])): ?>
						<?php $id = $_SESSION["id"]; ?>
						<?php $score = DB::queryfirstfield("SELECT score FROM leaderboard WHERE user_id = %i", $id);?>
						<?php if (empty($score)): ?>
						<?php $score = 0;?>
						<?php endif ?>
						<li><a href="/public/leaderboard.php">Score : <?php echo "{$score}";?></a></li>
						<?php $user = $_SESSION["username"]; ?>
						<li><a href="/public/logout.php">Log Out (<?php echo "{$user}";?>)</a></li>
						<?php endif ?>
					</ul>	
					
				</div>
				
			</div>
		</nav>
		
		<?php if (empty($text)): ?>
		 <div class='jumbotron'>
		 	<div class='container text-center'>
		 		<img src='/public/img/header-logo1.png' height="80%" width="80%">
		 	</div>
		 </div>
		 <?php endif ?>
		 
		 <?php if (!empty($text)): ?>
		 <div class='jumbotron'>
		 <h1><p class='text-center'><?php echo "{$text}";?></p></h1>
		 </div>
		 <?php endif ?>