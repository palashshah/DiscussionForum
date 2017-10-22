<?php 
	if(!isset($_SESSION["name"])){
		header("location : ./home.php");
	}
?>

<span style="text-align:right ;width:99%; display:block; margin-bottom:5px;">
	Welcome <a href="adminEdit.php"><?php echo "$_SESSION[name]";?></a>, [ <a href="../logout.php">log-out</a> ] 
</span>