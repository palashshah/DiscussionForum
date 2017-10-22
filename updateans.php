<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "UPDATE ANSWER SET ANS_DETAIL='$_POST[ansdetail]' WHERE ANS_ID=$_POST[ansid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location : success_ans.php");
	}
	else{
		header("location : ans.php");
	}
?>