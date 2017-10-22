<?php 
	require("header.php");
	
	$uname = $pass = $name = $email = $gender = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = test_input($_POST['uname']);
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);	
		$gender = $_POST['gender'];		
	}

	$sql = "INSERT INTO USER(USERNAME, PASSWORD, FULL_NAME, EMAIL, GENDER) VALUES('$uname', '$pass', '$name', '$email', '$gender')";

	$result = ExecuteSetQuery($sql);
	
	if($result){
		header('location:success.php');
	}
	else{
		header('location:signup.php?act=invalid');
	}

?>