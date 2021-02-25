<?php require_once 'partials/header.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="" class="navbar-brand">Blogger</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="index.php" class="nav-link">Back to Blog</a>
		</li>
	</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Register</h4>
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h4>Register</h4>
			<form action="register.php" method="POST">
				<input type="text" name="register_name" placeholder="name" class="form-control" required><br>
                <select id="access_level" name="access_level" class="form-control">
                    <option value="">-- Choose Access Level --</option>
                    <?php 
                        foreach ($Accesslevels as $Accesslevel) {
                            echo "<option value='".$Accesslevel['id']."'>".$Accesslevel['name']."</option>";
                        }
                    ?>
                </select><br>
				<input type="text" name="register_email" placeholder="email" class="form-control" required><br>
				<input type="password" name="register_password" placeholder="password" class="form-control" required><br>
				<button class="form-control btn btn-warning" name="registerBtn">Register</button>
			</form>
		</div>
	</div>
</div>

<?php require_once 'partials/footer.php'; ?>