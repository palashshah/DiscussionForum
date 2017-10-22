<?php 
	session_start();
	unset($_SESSION["name"]);

	session_destroy();
	require('header.php');
?>

<h1 align="center">Log Out</h1>
<p align="center">You have logged out. Click <a href="../home.php">here</a> to login again.</p>