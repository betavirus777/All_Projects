<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>Login</h2>
			<p>Enter your registered email and password.</p>
		</header>
		
	<div class='text-center'>
    	<p>Please read the <a href="/views/instructions.php#two">Instructions</a> before Registering.</p>
	</div>

	<section>
		<form method="post" action="/public/login.php">
			<div class="row uniform 50%">
				<div class="12u$">
					<input type="email" name="email" id="email" value="" placeholder="Email" />
				</div>
				<div class="12u$">
					<input type="password" name="password" id="password" value="" placeholder="Password" />
				</div>
				<ul class="actions">
					<li><input type='submit' class="button special" value='Log In'></li>
				</ul>
			</div>
		</form>
	</section>
	
	<div class='text-center'>
    	<p>or <a href="/public/register.php">Register</a> for an account.</p>
	</div>
		
	</div>
</div>