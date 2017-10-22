<?php
	session_start();
	require('header.php');
	require('checkUser.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body align = "center">
	<div class="alert alert-success">
	<?php
		echo "<h1> SUCCESS! Your profile is updated. </h1> " ;
	?>
	</div>
</body>
</html>
