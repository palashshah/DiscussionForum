<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM CATEGORY";
	$res = ExecuteGetQuery($sql);

	if(mysqli_num_rows($res) == 0){
		header('location : newcat.php');
	}
	else{
		if(isset($_GET['act'])){
			echo "<h3>No topics found. Please add one.</h3>";
		}
		?>
		<h3>New Topic</h3><br>
			<form method="POST" class='form-inline' action="addTopic.php" align="center">
				Category: <select name="top_cat">
					<?php 
						while($row = mysqli_fetch_array($res)){
							echo "<option value='$row[CAT_ID]'>$row[CAT_NAME]</option>";
						}
					?>
				</select><br><br>
				Subject: <input type="text" name="topic_name"><br><br>
				Description: <textarea name="topic_description"></textarea><br><br>
				<input class="btn btn-primary" type="submit" value="Add Topic">
			</form>
		<?php
	}
?>