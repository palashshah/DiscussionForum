<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM QUESTION WHERE QUESTION_ID=$_GET[qid]";
	$res = ExecuteGetQuery($sql);

	$row = mysqli_fetch_array($res);
?>
<div align="center">
<form method="POST" action="addAnswer.php?qid=<?php echo "$_GET[qid]" ?>">
		<h3><?php echo "$row[HEADING]"; ?><br></h3>
		RE: <?php echo "$row[QUESTION_DETAIL]"; ?><br><br>
		<textarea name="reply"></textarea><br><br>
		<input class="btn btn-primary" type="submit" value="Submit">
</form>
</div>
