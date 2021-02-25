<?php require "partials/header.php";?>

<div class="jumbotron text-center">
	<h4>Login</h4>
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h4 class="mb-5">Login</h4>
			<form action="login.php" method="POST">
				<input type="text" name="login_email" placeholder="email" class="form-control" required><br>
				<input type="password" name="password" placeholder="password" class="form-control" required><br>
				<button class="form-control btn btn-primary" name="loginBtn">Login</button>
			</form>
		</div>
	</div>
</div>

<?php require "partials/footer.php";?>