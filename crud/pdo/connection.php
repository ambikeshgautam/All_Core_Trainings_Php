<?php 
/*

						PHP Data Object (PDO)
PDO  is a database access layer which provides a fast and consistent interface for accessing and managing database in PHP applications. Ecvery DBMS has specifiec PDO driver(s) that must be installed when you are using PDO in PHP applications . It supports 12 different databases system.

Benifits:-

>Usability 
>Eroor handling 
>Multiple Database
>Secure
>Reusability
>Exception Class
							-----------12 database----



-----------------------------------------------------------------------------------------------------------------------------------------------

Difference and Similarities between MySqli & PdO
Differences:-
.Mysqli supports dual interface Procedural and object-oriented while POD supports only Object-oriented.
.Mysqi will work only with MySql Database while PDO will work on 12 different database systems

similarities:-
>Both supports Prepared Statemnts
>Both provides same level of security.
>Both supports Object -Oriented.


*/


// $servername = "localhost";
// $username = "root";
// $password = "";

// make try and pass connection
// try{
//     $conn = new PDO(mysql:host=$servername; $username, $password);
//     //set the PDO error to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected Successfully";


// }
// catch{
//     echo"Connection failed ";
// }

//make catch

$dsn = "mysql:host=localhost; dbname = regisration;";
$db_user = "root";
$db_password = "";
3

// $conn = new PDO($dsn,$db_user,$db_password);//mysql="is a driver name " host="localhost";
// if($conn){
// 	echo "connection is okay";
// }else{
// 	echo "not";
// }


//for handle Exception for the database such as db_name , password, ;

try {
	$conn = new PDO($dsn,$db_user,$db_password);//mysql="is a driver name " host="localhost";

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "connected";

} catch (PDOException $e) {
	echo"connection failed ".$e->getMessage();	
}




?>