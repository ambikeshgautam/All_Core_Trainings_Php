<?php

// 1 :- Initialise variable of servername password and username and database name

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

//pass those variable in the mysqli_connection with and assigne it into a variable which is $conn
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check if conntion is !$conn then print conncetion is failed 
// else echo connection is okay
if(!$conn){
    echo "connection is Failed !";
}else{
    // echo "connection is okay";

}





?>