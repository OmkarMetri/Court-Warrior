<?php
	session_start();

	if (isset($_GET['logout_user'])) {
		session_destroy();
		unset($_SESSION['name']);
		header("location: signup.php");
	}
?>