<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="utf-8" />
		<?php if (!empty($title)): ?>
            <title>Virtual Bounty: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Virtual Bounty</title>
        <?php endif ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets1/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/">Virtual Bounty</a></h1>
					
					<nav id="nav">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/public/level1.php">Level 1</a></li>
							<li><a href="/public/level2.php">Level 2</a></li>
							<li><a href="/public/level3.php">Final Level</a></li>
							<li><a href="/public/feedback.php">Feedback</a></li>
							<li><a href="/public/leaderboard.php">Leaderboard</a></li>
							<?php if (empty($_SESSION["username"])): ?>
							<li><a href="/public/login.php" class="button special">Login/Sign Up</a></li>
							<?php endif ?>
							<?php if (!empty($_SESSION["username"])): ?>
							<?php if (($_SESSION["username"]) == 'ADMIN'): ?>
							<li><a href="/public/admin.php">Admin</a></li>
							<?php endif ?>
							<?php endif ?>
							<?php if (!empty($_SESSION["username"])): ?>
							<?php $id = $_SESSION["id"]; ?>
							<?php $score = DB::queryfirstfield("SELECT score FROM leaderboard WHERE id = %i", $id);?>
							<?php if (empty($score)): ?>
							<?php $score = 0;?>
							<?php endif ?>
							<li><a href="/public/leaderboard.php">Score : <?php echo "{$score}";?></a></li>
							<?php $user = $_SESSION["username"]; ?>
							<li><a href="/public/logout.php" class="button special">Log Out (<?php echo "{$user}";?>)</a></li>
							<?php endif ?>
						</ul>
					</nav>
				</header>