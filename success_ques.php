<?php 
	require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body align = "center">
	<div class="alert alert-success">
	<?php
		echo "<h1><a href='topic.php?topid=$_GET[topid]'>New question</a> successfully added. </h1>" ;
	?>
	</div>
</body>
</html>
