<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "UPDATE ANSWER SET ANS_DETAIL='$_POST[ansdetail]' WHERE ANS_ID=$_POST[ansid]";
	$res = ExecuteSetQuery($sql);

	header("location : ans.php");
	
?>