<?php

    $u_id = $_POST["id_user"];
    $u_name = $_POST["name_user"];
    $conn =  mysqli_connect("localhost","root","","ajax") or die("connectino is failed");

    $sql = "INSERT INTO practical1(id, name) VALUES ('$u_id','$u_name')";

    if(mysqli_query($conn, $sql)){
        echo 1;
    }else{
        echo 0;
    }




?>