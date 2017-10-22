<?php 
	session_start();
	require('header.php');

	$upd = "UPDATE ANSWER SET LIKES=LIKES+1, D_TIME=D_TIME WHERE ANS_ID=$_GET[ansid]";
	$res = ExecuteSetQuery($upd);

	$sql = "DROP PROCEDURE IF EXISTS UpdateLike";
	$res = ExecuteSetQuery($sql);

	$sql = "CREATE PROCEDURE UpdateLike()
			BEGIN
				IF NOT EXISTS (SELECT * FROM LIKED_BY WHERE USER_ID = $_SESSION[uid]) THEN 
					INSERT INTO LIKED_BY(USER_ID, ANS_ID) VALUES($_SESSION[uid], $_GET[ansid]); 
					UPDATE ANSWER SET LIKES=LIKES+1, D_TIME=D_TIME WHERE ANS_ID=$_GET[ansid];
				ELSE
					UPDATE ANSWER SET LIKES=LIKES-1, D_TIME=D_TIME WHERE ANS_ID=$_GET[ansid];
				END IF;
			END; ";
	$res = ExecuteSetQuery($sql);

	$sql = "CALL UpdateLike();";
	$res = ExecuteSetQuery($sql);

	header("location: ". $_SERVER['HTTP_REFERER']);
?>