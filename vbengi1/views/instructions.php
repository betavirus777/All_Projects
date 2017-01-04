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
							<li>
								<a href="#">Levels</a>
								<ul>
									<li><a href="/public/level1.php">Level 1</a></li>
									<li><a href="/public/level2.php">Level 2</a></li>
									<li><a href="/public/level3.php">Level 3</a></li>
								</ul>
							</li>
							<li><a href="/public/leaderboard.php">Leaderboard</a></li>
							<?php if (empty($_SESSION["username"])): ?>
							<li><a href="/public/login.php">Login/Sign Up</a></li>
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
							<li><a href="/public/logout.php">Log Out (<?php echo "{$user}";?>)</a></li>
							<?php endif ?>
						</ul>
					</nav>
				</header>
				
			
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Virtual Bounty</h2>
							<p>Think you know how to Google? <br>Engineer 2016</p>
						</header>
						<span class="image"><img src="/images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="/images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>The Event is for 48 Hours</h2>
										<p>The event goes live on 19th October 21:00 IST and ends on 21st October 21:00 IST</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<h2>Bounty <br> First Prize: Rs. 4000/- <br> Runner Up: Rs. 3000/-</h2>
								</div>
								<div class="4u$ 12u$(medium)">
									<header>
									<h2> </h2>
									<p>Please maintain legitimate login credentials. <br> Username should be parliamentary.</p>
									</header>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="/images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2></h2>
							<p>Please do not share any answers and clues on any form of media. Those who do so will be <strong>blocked</strong></p>
						    <p>For clues and more updates, please visit our Facebook page. If you are facing any problem, message us on Facebook.</p> 
						</header>
						<ul class="actions">
							<li><a href="https://www.facebook.com/virtualbounty/?fref=ts" class="button">Virtual Bounty FB Page</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>
				<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
				<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
			</ul>
		</footer>

		</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets/js/main.js"></script>
			
			<script src="/assets1/js/jquery.min.js"></script>
			<script src="/assets1/js/jquery.poptrox.min.js"></script>
			<script src="/assets1/js/skel.min.js"></script>
			<script src="/assets1/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets1/js/main.js"></script>

	</body>
</html>