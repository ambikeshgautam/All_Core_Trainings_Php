
<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "project";

// $conn = mysqli_connect($servername,$username,$password,$dbname);
// if(!$conn){
//     die("connection is failed !!".mysqli_connect_error());

// }else{
//     // echo "Connection is Okay";

// }
// $sql = "INSERT INTO `student`(`s_name`, `st_last_name`, `Rollno`, `email`, `fathername`) VALUES ('shashikant','bharti','15322344','giggoo11@gmail.com','gyaprasad')";
// if(mysqli_query($conn,$sql)){
//     $last_id = mysqli_insert_id($conn);
//     echo "Data is inserted into table ".$last_id;

// }else {
//     echo "data is not inserted into database ".$sql."<br>".mysqli_error($conn);
// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection is failed ".$conn->connect_error);
}else{
    // echo "connection is Okay !";
}
$sql = "INSERT INTO `fees`(`st_id`, `Rollno`, `address`, `date`, `fees_amount`, `st_name`) VALUES ('12002','163581006','lucknow','2000-02-2','4000000','ambikesh')";
if($conn ->query($sql) == TRUE){
    $last_id = $conn->insert_id;
    echo "data is inserted Successfully and last ID is ".$last_id;
}else {
     echo "Data is not inserted into database ...!".$sql."<br>".$conn->error;
}

?>