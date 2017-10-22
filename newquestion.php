<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM TOPIC WHERE TOPIC_ID=$_GET[topid]";
	$res = ExecuteGetQuery($sql);
	$row = mysqli_fetch_array($res);

	if(isset($_GET['act'])){
		echo "<h3>No questions found. Please add one.</h3>";
	}

	echo"
		<h4>Topic: $row[TOPIC_NAME]</h4>
		<h5>Description: $row[TOPIC_DESCRIPTION]</h5><br>
	";
?>

<form method="POST" action="addQuestion.php" align='center'>
	<input type="hidden" name="topid" value='<?php echo "$_GET[topid]"; ?>'>
	Heading: <input type="text" name="heading"><br><br>
	Question Detail: <textarea name="detail"></textarea><br><br>
	<input class="btn btn-primary" type="submit" value="Add Question">
</form>