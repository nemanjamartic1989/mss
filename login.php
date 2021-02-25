<?php 

require_once 'bootstrap.php';

if (isset($_SESSION['loggedUser'])) {
	header("Location: index");
}

if (isset($_POST['loginBtn'])) {
	$user->logUser();
}

require_once 'views/login.view.php';