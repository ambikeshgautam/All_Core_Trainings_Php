<?php

	include('connection.php');
	// select all from database 
	
	$sql = " SELECT * FROM student";

	// Prepared statement

	$result = mysqli_prepare($conn , $sql);

	//Bind result set in variables
	mysqli_stmt_bind_result($result,$id,$s_name,$st_last_name,$Rollno,$email,$fathername);

	// Execute Statement 
	mysqli_stmt_execute($result);

	// store result
	mysqli_stmt_store_result($result);

	if(mysqli_stmt_num_rows($result)>0){

		while(mysqli_stmt_fetch($result)){
			echo $id ." ".$s_name." ".$st_last_name." ".$Rollno." ".$email."".$fathername." <br><br>"; 
		}

	}else{
		echo "Zero Rows are there !";
	}



?>