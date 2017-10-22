<?php 
	require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000}
	</style> 
</head>
<body>
	<form method="post" action="login.php">
		<div class="form-group" align="center">
		Username: <input type="text" name="uname" class="form-group" required ="required"><span id="spuid" style="color: red"></span><br>
		</div>
		<div class="form-group" align="center">
		Password: <input type="password" name="pwd" class="form-group" required="required"><span id="sppwd" style="color: red"></span><br>
		</div>
		<div align="center">
		<input type="submit" value="Login" class="btn btn-primary">
		<a href="signup.php"><input type="button" value="Sign Up" class="btn btn-primary"></a>
		</div>
		<br><br>
		<?php 
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Invalid Username or Password. <a href='forgotpass.php'>Forgot Password?</a>";
					echo "</div>";
				}
		 ?>
	</form>
</body>
</html>