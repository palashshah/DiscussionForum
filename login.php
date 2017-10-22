<?php 
	require("header.php");

	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];

	$sql = "SELECT * FROM USER WHERE USERNAME = '$uname'";
	$result = ExecuteGetQuery($sql);

	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_array($result);

		if(password_verify($pwd, $row["PASSWORD"])){
			session_start();

			$_SESSION["uid"] = $row["USER_ID"];
			$_SESSION["name"] = $row["FULL_NAME"];

			if($row["USER_LEVEL"] == 1){
				header("location : admin/home.php");
			}
			else{
				header("location : userhome.php");
			}
		}
		else{
			header("location : home.php?act=invalid");
		}
	}
	else{
		header("location : home.php?act=invalid");
	}
?>