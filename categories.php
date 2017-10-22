<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM CATEGORY";
	$res = ExecuteGetQuery($sql);

	if(mysqli_num_rows($res) == 0){
		echo "<h3>Ask ADMIN to add categories</h3>";
	}
	else{
		echo "
		<table class='table table-hover table-bordered'>
			<tr>
				<th>Category</th>
				<th>Description</th>
			</tr>";
			while($row = mysqli_fetch_array($res)){
				echo"
				<tr>
					<td><a href='topics.php?catid=$row[CAT_ID]'>$row[CAT_NAME]</td>
					<td>$row[CAT_DESCRIPTION]</td>
				</tr>
				";
			}
		"</table>
		";
	}
?>