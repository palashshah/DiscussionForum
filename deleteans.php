<?php 
	session_start();
	require('header.php');

	$sql = "DELETE FROM ANSWER WHERE ANS_ID=$_GET[ansid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location : ans.php");
	}
	else{
		header("location : unauth.php");
	}
?>