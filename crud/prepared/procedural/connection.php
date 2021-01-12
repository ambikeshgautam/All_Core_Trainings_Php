<?php

$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	//echo "connection is okay";
}else{
	echo "Not connected";
}

// //Select all data
// $sql = "SELECT * FROM student WHERE id = ?";

// // Prepared Statement 
// $result = mysqli_prepare($conn,$sql);

// //Bind parameter 
// mysqli_stmt_bind_param($result,'i',$id);
// $id = 12;

// //Bind Result set in variables
// mysqli_stmt_bind_result($result,$id,$s_name,$st_last_name,$Rollno,$email,$fathername);


// // Execute Prepared Statement 

// mysqli_stmt_execute($result);

// //Fetch 
//  mysqli_stmt_fetch($result);
//  echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

 // Close prepared statemetn 

 // mysqli_stmt_close($result);
 // //connectino close
 // myslqi_close($conn);


//============================================noramly way to fetch data =======================================================
// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// mysqli_stmt_fetch($result);

// echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";s


// while(mysqli_stmt_fetch($result)){

// 	echo "ID: -".$id."Name :-".$s_name." " .$st_last_name."Rollno :-".$Rollno."Email".$email."fathername".$fathername."<br><br>";

// }

$sql = "SELECT * FROM student";

// prepared statement
$result = mysqli_prepare($conn,$sql);

//Execute statement 
mysqli_stmt_execute($result);
// Store Result 
mysqli_stmt_store_result($result);
//Number of rows
$total_row =  mysqli_stmt_num_rows($result);

//echo $total_row;

// fetch no.of rows




?>