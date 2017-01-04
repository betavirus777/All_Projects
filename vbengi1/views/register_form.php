<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>Register</h2>
			<p>Enter your Name, email and Phone no. to Register.</p>
		</header>
		
 	<div class='text-center'>
    	<p>Please read the <a href="/views/instructions.php#two">Instructions</a> before Registering.</p>
	</div>

	<section>
		<form method="post" action="/public/register.php">
			<div class="row uniform 50%">
				<div class="12u$">
					<input type="text" name="name" id="name" value="" placeholder="Name" />
				</div>
				<div class="12u$">
					<input type="text" name="username" id="username" value="" placeholder="Username (Unique)" />
				</div>
				<div class="12u$">
					<input type="email" name="email" id="email" value="" placeholder="Email" />
				</div>
				<div class="12u$">
					<input type="password" name="password" id="password" value="" placeholder="Password" />
				</div>
				<div class="12u$">
					<input type="password" name="confirmation" id="confirmation" value="" placeholder="Password Again" />
				</div>
				<div class="12u$">
					<input type="text" name="phone" id="phone" value="" placeholder="Phone" />
				</div>
				<ul class="actions">
					<li><input type='submit' class="button special" value='Register'></li>
				</ul>
			</div>
		</form>
	</section>
	
	<div class='text-center'>
    	<p>or <a href="/public/login.php">Log In</a> if you have one account.</p>
	</div>
		
	</div>
</div>