<?php 
	session_start();
	require('header.php');

	$sql = "DELETE FROM QUESTION WHERE QUESTION_ID=$_GET[qid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location: ". $_SERVER['HTTP_REFERER']);
	}
	else{
		header("location : home.php");
	}
?>