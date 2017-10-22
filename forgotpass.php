<?php 
	require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form method="post" action="sendEmail.php"  align="center">
		<br><br>
		<div class="form-group">
		Username: <input type="text" name="uname" class="form-group" required ="required"><br>
		</div>
		<input type="submit" value="Send Email" class="btn btn-primary">
		<br><br>
		<?php 
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username doesnot exist.";
					echo "</div>";
				}
				else if($_GET["act"] == "notsent"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Unable to send email. Please try again.";
					echo "</div>";
				}
		 ?>
	</form>
</body>
</html>