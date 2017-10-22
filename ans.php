<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$result = ExecuteSetQuery("DROP PROCEDURE IF EXISTS MyAns");

	$sql = "CREATE PROCEDURE MyAns()
			BEGIN
				SELECT * FROM ANSWER A, QUESTION Q WHERE A.USER_ID=$_SESSION[uid] AND A.QUESTION_ID=Q.QUESTION_ID ORDER BY A.D_TIME DESC;
			END;";

	$result = ExecuteSetQuery($sql);

	$result = ExecuteGetQuery("CALL MyAns");

	// $sql = "SELECT * FROM ANSWER A, QUESTION Q WHERE A.USER_ID=$_SESSION[uid] AND A.QUESTION_ID=Q.QUESTION_ID ORDER BY A.D_TIME DESC";
	// $res = ExecuteGetQuery($sql);

	$no_of_rows = mysqli_num_rows($result);
	if($no_of_rows > 0){
		echo "<table class='table table-hover table-bordered'>
			<caption><h3>My Answers</h3></caption>
			<tr>
				<th>Heading</th>
				<th>Answer</th>
				<th>Date</th>
				<th>Likes</th>
				<th colspan='2'>Update</th>
			</tr>
		";
		// while($row = mysql_fetch_array($res)){
		while($row = mysqli_fetch_array($result)){
			echo "
				<tr>
				<td><a href='questionview.php?qid=$row[QUESTION_ID]'>$row[HEADING]</td>
				<td>$row[ANS_DETAIL]</td>
				<td>$row[D_TIME]</td>
				<td>$row[LIKES]</td>
				<td><a href='editanswer.php?ansid=$row[ANS_ID]'>Edit</a></td>
				<td><a href='deleteans.php?ansid=$row[ANS_ID]'>Delete</td>
				</tr>
			";
		}
		echo "</table>";
	}
	else{
		echo "<h3>No Answers</h3>";
	}
?>