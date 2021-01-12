<?php

    $student_id = $_POST["id"];
    $conn = mysqli_connect("localhost","root","","ajax");
    $sql = "DELETE FROM `practical1` WHERE $student_id";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }




?>