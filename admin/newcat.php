<?php  
	session_start();
	require('header.php');
?>
<h3>New Category</h3>
<br><br>
<form method="POST" action="addCat.php" align="center">
	Category Name: <input type="text" name="cat_name"><br><br>
	Category Description: <textarea name="cat_description"></textarea><br><br>
	<input class="btn btn-primary" type="submit" value="Add Category">
</form>