<?php 
	function ExecuteGetQuery($sql){
		$con = mysqli_connect ("localhost","username","password","database");
		// mysql_select_db ("mydb",$con);
		
		$rows = mysqli_query($con, $sql) or die ("Query fail: ".mysqli_error($con));
		
		mysqli_close($con);
	
		return $rows;
	}

	function ExecuteSetQuery($sql){
		$con = mysqli_connect ("localhost", "username","password","database");
		// mysql_select_db ("mydb",$con);
		
		$result = mysqli_query($con, $sql) or die ("Query fail: ".mysqli_error($con));
		mysqli_close($con);
		
		return $result;
	} 

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>