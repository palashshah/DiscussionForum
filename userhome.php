<?php 
	session_start();
	require('header.php');
	require('checkUser.php');
?>

<?php 

	$result = ExecuteSetQuery("DROP PROCEDURE IF EXISTS SelectCat");

	$sql = "CREATE PROCEDURE SelectCat()
			BEGIN
				SELECT * FROM CATEGORY;
			END;";
	$result = ExecuteSetQuery($sql);

	$result = ExecuteGetQuery("CALL SelectCat");

	if(mysqli_num_rows($result) == 0){
		echo "<h3>Ask ADMIN to add categories</h3>";
	}
	else{
		echo "
		<table class='table table-hover table-bordered'>
		<caption><h3 align='center'>All Categories</h3></caption>
			<tr>
				<th>Category</th>
				<th>Description</th>
			</tr>";
			while($row = mysqli_fetch_array($result)){
				echo"
				<tr>
					<td><a href='topics.php?catid=$row[CAT_ID]'>$row[CAT_NAME]</td>
					<td>$row[CAT_DESCRIPTION]</td>
				</tr>
				";
			}
		echo "</table>";
	}
?>

</body>
</html>
