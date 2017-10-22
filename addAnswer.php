<?php 
	session_start();
	require('header.php');

	$qid = $_GET['qid'];
	$reply = $_POST['reply'];
	$uid = $_SESSION['uid'];

	$sql = "INSERT INTO ANSWER(QUESTION_ID, ANS_DETAIL, D_TIME, USER_ID) VALUES('$qid', '$reply', NOW(), '$uid')";
	$res = ExecuteSetQuery($sql);

	if($res){
		header('location : questionview.php?qid='.$qid);
	}
?>