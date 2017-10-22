<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$result = ExecuteSetQuery("DROP PROCEDURE IF EXISTS MyQues");

	$sql = "CREATE PROCEDURE MyQues()
			BEGIN
				SELECT * FROM QUESTION WHERE USER_ID=$_SESSION[uid] ORDER BY VIEWS DESC, D_TIME DESC;
			END;";
	$result = ExecuteSetQuery($sql);

	$result = ExecuteGetQuery("CALL MyQues");

	$no_of_rows = mysqli_num_rows($result);
	if($no_of_rows > 0){
		echo "
		<table class='table table-hover table-bordered'>
		<caption><h3>My Questions</h3></caption>
		<tr>
			<th>Heading</th>
			<th>Detail</th>
			<th>Date</th>
			<th>Views</th>
			<th></th>
		</tr>";
		while($row = mysqli_fetch_array($result)){
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