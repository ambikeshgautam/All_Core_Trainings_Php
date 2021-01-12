<?php 

	/*  mysqli_query -- This function is used to perform a query againts the database . Fom successfull SELECT,SHOW ,DECROGE,or EXPLAIN queries it iwll return a mysqli_result objet. For other successful queries it will return TRUE and FALSE on failure 

	Syntax:- mysqli_query(connection,Query,Result_Mode);--------
	Ex:- mysqli_query($conn,$sql);
____________________________________________________________________________________________________________________________
	mysqli_num_rows() function returns the number of rows in a result set .

	Syntax :- mysqli_query(connection,Query,Result_Made);
	Ex"- mysqli_query($conn,$sql);

	Connectoin:- it Specifies the connection to use
	Query:- it specifies the query string

	Result_mode:- it specifies a constant . Either :

		MYSQLI_USE_RESULT(Use this if we have to retrieve large amount of data)
		MYSQLI_STORE_RESULT(this is default)

		mysqli_num_rows() function returns the in a results set.

		Syntax: - mysqli_num_rows(mysqli_result);

		Where mysqli_result specifies a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()


		Ex:- mysqli_num_rows($result);

_____________________________________________________________________________________________________________________________

		mysqli_fetch_assoc() function fetches a result row as an associative array . It returns as associative arrray of strings representing the fetched row. NULL if there are no more rows in results-set Fieldnames returned from this function are case-sensitive

		The "mysqli_error()" function returns the last error description for the most recent function class if any "" if no erro occurred.
		Syntax: - mysqli_error($conn);
____________________________________________________________________________________________________________________________________

	*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection is failed");
}else{
	//echo"Okay";
}
$sql = "SELECT * FROM employee_address";
$result = mysqli_query($conn,$sql);
 
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row['id'].$row['email'].$row['fist_name'].$row['last_name']."<br>";
   
	}
}else{
	echo " there is no records";
}


	



?>