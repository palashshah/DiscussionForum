<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$upd = "UPDATE QUESTION SET VIEWS=VIEWS+1, D_TIME=D_TIME WHERE QUESTION_ID=$_GET[qid]";
	$res = ExecuteSetQuery($upd);

	$str = "SELECT * FROM QUESTION Q, USER U WHERE Q.USER_ID = U.USER_ID AND Q.QUESTION_ID=$_GET[qid]";
	$res = ExecuteGetQuery($str);

	$no_of_rows = mysqli_num_rows($res);
	if($no_of_rows > 0){
		$row = mysqli_fetch_array($res);
		echo "<br><br><div class='panel panel-danger'>
					<div class='panel-heading'>$row[HEADING]
					<span style='float:right'>By: $row[FULL_NAME]</span>
					</div>
					<div class='panel-body'>$row[QUESTION_DETAIL]</div>
					<div class='panel-footer'>
						Date: $row[D_TIME]     <a href='answer.php?qid=$row[QUESTION_ID]'>Reply</a>
						<span style='float:right'>$row[VIEWS] Views</span>
					</div>
				</div>
				";
	}

	$str = "SELECT * FROM ANSWER A, USER U WHERE A.QUESTION_ID=$_GET[qid] AND A.USER_ID=U.USER_ID ORDER BY LIKES DESC,D_TIME DESC";
	$res = ExecuteGetQuery($str);

	$no_of_rows = mysqli_num_rows($res);
	if($no_of_rows > 0){
		while($row = mysqli_fetch_array($res)){
			echo "
				<div class='panel panel-primary'>
					<div class='panel-heading'>Asnwered by: $row[FULL_NAME]</div>
					<div class='panel-body'>$row[ANS_DETAIL]</div>
					<div class='panel-footer'>
						Date: $row[D_TIME]
						<span style='float:right'><a href='like.php?ansid=$row[ANS_ID]&qid=$_GET[qid]'><img src='../images/like.png' alt='like' height=20 width=20></a> $row[LIKES] Likes</span>
					</div>
				</div>
			";
		}
	}
	else{
		echo "<h3>No Answers.</h3>";
	}
?>