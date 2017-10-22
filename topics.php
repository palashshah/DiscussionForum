<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	// $sql = "SELECT * FROM CATERGORY WHERE CAT_ID=$_GET[catid]";
	// $res = ExecuteGetQuery($sql);
	// $cat = mysqli_fetch_array($res);

	$sql = "SELECT * FROM TOPIC WHERE CAT_ID=$_GET[catid]";
	$res = ExecuteGetQuery($sql);

	if(mysqli_num_rows($res) == 0)
		header('location : newtopic.php?act=invalid');

	echo "
		<table class='table table-hover table-bordered' align='center'>
		<tr>
			<th>Topic</th>
			<th>Description</th>
		</tr>
		";
		while($row = mysqli_fetch_array($res)){
			echo "
				<tr>
					<td>
					<h3><a href='topic.php?topid=$row[TOPIC_ID]'>$row[TOPIC_NAME]</a></h3>
					</td>
					<td>$row[TOPIC_DESCRIPTION]</td>
				</tr>
			";
		}
	"</table>";
?>