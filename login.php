<?php require "views/partials/header.php";?>

<div class="jumbotron text-center">
	<h4>Login / Register</h4>
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h4 class="mb-5">Login</h4>
			<form action="login_register.php" method="POST">
				<input type="text" name="login_email" placeholder="email" class="form-control" required><br>
				<input type="password" name="password" placeholder="password" class="form-control" required><br><br>
				<button class="form-control btn btn-primary" name="loginBtn">Login</button>
			</form>
			<?php if ($user->loggedUser): ?>
			<div class="alert alert-success">Log In Success 
				<a href="index.php">Go To Blog</a>
			</div>
			<?php elseif(isset($_POST['loginBtn'])): ?>
			<div class="alert alert-danger">Wrong Username and Password</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php require "views/partials/footer.php";?>