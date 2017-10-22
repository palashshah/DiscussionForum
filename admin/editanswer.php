<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM ANSWER A, QUESTION Q WHERE A.QUESTION_ID=Q.QUESTION_ID AND A.ANS_ID=$_GET[ansid]";
	$res = ExecuteGetQuery($sql);
	$row = mysqli_fetch_array($res);

	echo "<body align='center'><h3>$row[HEADING]</h3><br>$row[QUESTION_DETAIL]<br><br>
		<form method='POST' action='updateans.php' align = 'center'>
		<input type='hidden' name='ansid' value='$row[ANS_ID]'>
		<textarea name='ansdetail'>$row[ANS_DETAIL]</textarea><br><br>
		<input class='btn btn-primary' type='submit' value='Update'>
		</form>
		</body>";
?>


