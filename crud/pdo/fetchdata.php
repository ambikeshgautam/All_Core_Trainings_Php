<?php

/* 
		PDO - Fetch DB Data/SELECT 

	>query ($sql_statement) -It executes an Sql statement in a single function clas ,returning the result set (if any ) returnt by the statemnt as a PDo Statement object or FAlse on failure.
	>fetch($fetch_Style) - It fetches a row from result set assiciatd with a PDO Statement Object.The fetch_style parameter determine how ODo return the row

	> fetchAll($fetch_Style) - It returns an array containing all of the remaining rows inthe result set . Hte array represents each row  as either an array of colum values or an object with properties corresponding to each colum name. An empatyh array is returned if there are zero results to fetch , or FALSE on failure , the fetch_style parameter detemins how PDO returns the row.

	-------------------------------$fetch_Style ------------------------------------------------

	>>> PDO::FETCH_BOTH (default): It returns an array indexed by both colum name and 0- index colum number as retunred in your result set.
	>>> PDO::FETCH)ASSOC
	>>>rowCount()++
	>>>



*/
 $dsn = "mysql:host=localhost; dbname = project;";
 $db_name = "root";
 $password = "";
 try{
 	$conn = new PDO($dsn,$db_name,$password);
 	
 }catch(PDOException $e){
 	echo "Eroor";
 }


	$sql = "SELECT * FROM student";
	$result = $conn->query($sql);
	
	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo $row['id'];
	}
 



?>