<?php 
	session_start();
	require('header.php');

	$sql = "INSERT INTO QUESTION(HEADING, QUESTION_DETAIL, USER_ID, TOPIC_ID) VALUES('$_POST[heading]', '$_POST[detail]', $_SESSION[uid], $_POST[topid])";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("location : success_ques.php?topid=$_POST[topid]");
	}
	else{
		header("location : newquestion.php?topid=$_POST[topid]");
	}
?>

