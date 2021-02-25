<?php 
    require_once 'bootstrap.php'; 
    require_once 'lock.php';
?>

<?php require_once 'views/partials/header.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="" class="navbar-brand">MSS</a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a href="logout.php" class="nav-link">Logout</a>
		</li>
	</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Welcome: <?php echo $_SESSION['loggedUser']->name;?></h4>
</div>
<div class="container">
	<div class="row">
		<div class="col-6">
			
		</div>
	</div>
</div>

<?php require_once 'views/partials/footer.php'; ?>