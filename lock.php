<?php 

if (!isset($_SESSION['loggedUser'])) {
	header("Location: login");
}
