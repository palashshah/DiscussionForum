<?php
	session_start();

	require('header.php');
	require('checkUser.php');
	

	$sql = "SELECT * FROM USER WHERE USER_ID = $_SESSION[uid]";

	$rows = ExecuteGetQuery($sql);

	if(mysqli_num_rows($rows) > 0){

		$row = mysqli_fetch_array($rows);

		echo "
		<head>
			<style>
				.error {color: #FF0000}
			</style>
			<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
			<!-- <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script> -->
			<!-- <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> -->
		</head>
		<body align='center'>

			<h2>Edit Admin</h2>
			<p><span class = 'error'>All fields are compulsory.</span></p>
			<form method='post' class='form-inline' action='updateAdmin.php' >
				<div class='form-group'>
					Username: <input type='text' name='aname' required='required' class='form-control' value='$row[USERNAME]'>	
				</div>
				</br></br>
				<div class='form-group'>
					Password: <input type='password' name='pass' required='required' class='form-control' value='$row[PASSWORD]'>	
				</div>
				</br></br>
				<div class='form-group'>
					Name: <input type='text' name='name' required='required'  class='form-control' value='$row[FULL_NAME]'>	
				</div>
				</br></br>
				<div class='form-group'>
					Email: <input type='email' name='email' required='required' class='form-control' value='$row[EMAIL]'>	
				</div>
				</br></br>
				<div class='radio'>
					Gender: 
					<input type='radio' name='gender' value='female' required='required' checked='checked'>Female	
					<input type='radio' name='gender' value='male' required='required'>Male
				</div>
				</br></br>
				<input type='submit' name='submit' value='Save' class='btn btn-primary'>
				<input type='reset' name='reset' value='Reset' class='btn btn-primary'>
			</form>
		</body>";
	}
?>