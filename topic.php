<?php 
	session_start();
	require('header.php');
	require('checkUser.php');
?>

<?php 
	$sql = "SELECT * FROM TOPIC WHERE TOPIC_ID=$_GET[topid]";
	$res = ExecuteGetQuery($sql);
	$row = mysqli_fetch_array($res);
	$tname = "$row[TOPIC_NAME]";

	$sql = "SELECT * FROM QUESTION WHERE TOPIC_ID=$_GET[topid]";
	$res = ExecuteGetQuery($sql);

	if(mysqli_num_rows($res) == 0){
		header("location : newquestion.php?topid=$_GET[topid]&act=invalid");
	}
	else{
		echo "
			<form method='POST' class='form-inline' action='newquestion.php?topid=$_GET[topid]' align='center'>
			<input type='submit' value='Ask Question' class='btn btn-primary'>
			</form>
			<table class='table table-hover table-bordered'>
			<caption><h3 align='center'>Questions under '$tname'</h3></caption>
			<tr>
				<th>Question</th>
				<th>Created At</th>
			</tr>";
			while($row = mysqli_fetch_array($res)){
				echo "
					<tr>
						<td><a href=questionview.php?qid=$row[QUESTION_ID]>$row[HEADING]</a></td>
						<td>$row[D_TIME]</td>
					</tr>
				";
			}
			"</table>
		";
	}
?>