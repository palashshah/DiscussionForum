<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM USER WHERE USER_ID<>$_SESSION[uid]";
	$res = ExecuteGetQuery($sql);
	$no_of_rows = mysqli_num_rows($res);

	if($no_of_rows > 0){
		echo "
			<table class='table table-hover table-bordered'>
			<caption><h3>Users</h3></caption>
			<tr>
			<th>Username</th>
			<th>Full Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th></th>
			</tr>
		";
		while($row = mysqli_fetch_array($res)){
			echo"
				<tr>
					<td>$row[USERNAME]</td>
					<td>$row[FULL_NAME]</td>
					<td>$row[EMAIL]</td>
					<td>$row[GENDER]</td>
					<td><a href='deleteuser.php?userid=$row[USER_ID]'>Delete</td>
				</tr>
			";
		}
		echo "</table>";
	}
?>