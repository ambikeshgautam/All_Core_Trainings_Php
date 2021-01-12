<?php
 include("dbcon.php");

if(isset($_POST['submit'])){

    $rn = $_POST['rollno'];
    $sn = $_POST['name'];
    $cl = $_POST['class'];

    if($rn!="" && $sn!="" && $cl!=""){
       

        $query = "INSERT INTO `student`(`rollno`, `name`, `class`) VALUES ('$rn','$sn','$cl')";//insert query in database
        $run = mysqli_query($conn,$query);//connection name and query for insert in Database
        if($run){
                echo"data is inserted";
        }else{
                echo"data is not inserted !";
        }

    }else{
        echo "All fields are required !";
    }
}
  
?>