<?php 
	session_start();
	require('header.php');

	echo "<h3 align='center'>This is Contact Us page.</h3>"
?>

<form method="post" class="form-inline" action="enquiry.php" align="center">
	Name: <input type="text" name="name" required="required">
	<br><br>
	Email: <input type="email" name="email" required="required">
	<br><br>
	Message: <textarea name="msg"></textarea>
	<br><br>
	<input type="submit" name="Submit" class="btn btn-primary">
</form>

<?php 
	if(isset($_GET["act"])){
		if($_GET["act"] == "invalid"){
			echo '<div class="alert alert-danger" align="center">';
			echo "Username doesnot exist.";
			echo "</div>";
		}
	}
?>