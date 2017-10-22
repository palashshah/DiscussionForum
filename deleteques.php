<?php 
	session_start();
	require('header.php');

	$sql = "DELETE FROM QUESTION WHERE QUESTION_ID=$_GET[qid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	header("location: ". $_SERVER['HTTP_REFERER']);
?>