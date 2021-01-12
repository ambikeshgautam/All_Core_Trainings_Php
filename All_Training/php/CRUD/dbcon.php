<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "studen";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($conn)){
    echo"";
}else{
    die("connection is failed becaouse ".mysqli_connect_error());

}

?>