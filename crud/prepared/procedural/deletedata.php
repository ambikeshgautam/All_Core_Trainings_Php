<?php


include('connection.php');

// DELETE Statement

$sql = "DELETE FROM student WHERE id = ?";

//Prepare Statement
$result = mysqli_prepare($conn,$sql);

if($result){
//Bind variable to prepare statement as Parameters
mysqli_stmt_bind_param($result,'i',$id);
//Variables and values
$id = 21;

// Execute Prepared Statement
mysqli_stmt_execute($result);
echo mysqli_stmt_affected_rows($result)."Row is Deleted <br>";
	}
// close prepared Statement
	mysqli_stmt_close($result);
// close connection 
	mysqli_close($conn);


?>