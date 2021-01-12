<?php

include('connection.php');


/*  												

						mysqli_query() 
->This function is used to perform a query againts the database, For successfull SELECT ,SHOW ,DESCRIBE , or Exaplain queries it will return a 
"mysqli_result() object" .For the successful querries it will return TRUE and FALSE  on failure.

Syntax : - mysqli_query($connection , Query , Result_MOde);
Example :- myslqi_query($conn,$sql);

Connection:- It specifies the connection to use

Query :- It specifies the query string

Result_Mode:- It specifies a constant Either:
		
			MYSQLI_USE_RESULT(use this if we have to retrieve large amount of data)
			MYSQLI_STORE_RESULT(This is default);

=========================================================mysqli_num_rows()============================================================

mysqli_num_rows() function returns the number the number of rows in a result set.

Syntax:- mysqli_num_rows(mysqli_result);

Where mysqli_result specifies a rsult set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()
Ex:- mysqli_num_rows($result);
=======================================================mysqli_fetch_assoc()++++++++++++++++++++++++++++++++++++++++++++++++++++++++=======

mysqli_fetch_assoc() function fetchs  aresult row as an associative array .It returns as associative array of string representing the fetched 
row , NULL  if there is no more rows in result-set Fieldnames returned returne from this function are case_sensitive

Syntax: mysqli_fetch_assoc(mysqli_result)

	Where mysqli_result specifies a result set identifier returned by mysqli_query(), mysqli_store_result(),or mysqli_use_result()

	Ex:- mysqli_fetch_assoc($result);

mysqli_error()-> function returns the last error description for the most recent function call , if any . ""if no error occured .

Syntax:- mysqli_error(Connection);
ex:- mysqli_error($conn);
*/

		$sql = " SELECT * FROM `student`";

		$result = mysqli_query($conn,$sql);
		if ($result) {
				
				while($row = mysqli_fetch_assoc($result)){
				echo $row['id']."  ".$row['s_name']."  ".$row['st_last_name']."  ".$row['Rollno']."  ".$row['email']."  ".$row['fathername']."<br>";
				}		
		}else{
			echo "There is error in some either query or connection";
		}

?>
