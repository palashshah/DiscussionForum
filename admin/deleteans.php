<?php 
	session_start();
	require('header.php');

	$sql = "DELETE FROM ANSWER WHERE ANS_ID=$_GET[ansid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location: ". $_SERVER['HTTP_REFERER']);
	}
	else{
		header("location : home.php");
	}
?>