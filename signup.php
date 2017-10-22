<?php 
	session_start();
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000}
	</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body align="center">

	<h2>User Sign-up Form</h2>
	<p><span class = "error">All fields are compulsory.</span></p>
	<form method="post" class="form-inline" action="addUser.php" >
		<div class="form-group">
			Username: <input type="text" name="uname" required="required" class="form-control">	
		</div>
		</br></br>
		<div class="form-group">
			Password: <input type="password" name="pass" required="required" class="form-control">	
		</div>
		</br></br>
		<div class="form-group">
			Name: <input type="text" name="name" required="required"  class="form-control">	
		</div>
		</br></br>
		<div class="form-group">
			Email: <input type="email" name="email" required="required" class="form-control">	
		</div>
		</br></br>
		<div class="radio">
			Gender: 
			<input type="radio" name="gender" value="female" required="required">Female	
			<input type="radio" name="gender" value="male" required="required">Male
		</div>
		</br></br>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		<input type="reset" name="reset" value="Reset" class="btn btn-primary">
		<br><br>
		<?php 
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username already exists. Please try again.";
					echo "</div>";
				}
		 ?>
	</form>
</body>
</html>