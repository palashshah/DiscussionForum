<?php 
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "DELETE FROM USER WHERE USER_ID=$_GET[userid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location : ".$_SERVER['HTTP_REFERER']);
	}
	else{
		header("lcoation : home.php");
	}
?>