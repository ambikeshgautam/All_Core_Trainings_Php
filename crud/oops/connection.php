 <?php
//create servername and username ,servername,password, dbname
$servername = "localhost";
$usrename = "root";
$password ="";
$dbname = "registration";
//make connection variable and make a object of the mysqli fucntion and pass those variable in the mysqli function
$conn = new mysqli($servername,$usrename,$password);
// check if connection is okay then print the "okay" else "not okay"
if($conn->error){
    echo"Failed ";
}else{
    echo"ok";
}
 ?>