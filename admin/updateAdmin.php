<?php 
	session_start();

	require('header.php');
	require('checkUser.php');

	$uid = $_SESSION['uid'];
	$uname = $pass = $name = $email = $gender = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = test_input($_POST['aname']);
		$pass = test_input($_POST['pass']);
		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);
		$gender = test_input($_POST['gender']);
	}

	$sql = "UPDATE USER SET USERNAME='$uname', PASSWORD='$pass', FULL_NAME='$name', EMAIL='$email', GENDER='$gender' WHERE USER_ID = $uid";

	$result = ExecuteSetQuery($sql);

	if($result == 1){
		header("location : updSuccess.php");
	}
	else{
		header("location : userEdit.php");
	}

?>