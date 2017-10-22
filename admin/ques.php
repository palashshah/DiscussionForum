<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM QUESTION ORDER BY VIEWS DESC,D_TIME DESC";
	$res = ExecuteGetQuery($sql);

	$no_of_rows = mysqli_num_rows($res);
	if($no_of_rows > 0){
		echo "
		<table class='table table-hover table-bordered'>
		<caption><h3>Questions<h3></caption>
		<tr>
			<th>Heading</th>
			<th>Detail</th>
			<th>Date</th>
			<th>Views</th>
			<th></th>
		</tr>";
		while($row = mysqli_fetch_array($res)){
			echo "
			<tr>
			<td><a href='questionview.php?qid=$row[QUESTION_ID]'>$row[HEADING]</a></td>
			<td>$row[QUESTION_DETAIL]</td>
			<td>$row[D_TIME]</td>
			<td>$row[VIEWS]</td>
			<td><a href='deleteques.php?qid=$row[QUESTION_ID]'>Delete</a></td>
			</tr>
			";
		}
		echo "</table>";
	}
	else{
		echo "<h3>No Questions</h3>";
	}
?>