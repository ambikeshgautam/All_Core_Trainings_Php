<?php

include('connection.php');
 $sql = "CREATE DATABASE myDBusiasdfngoop";

 if($conn->query($sql) == TRUE){
    echo"Database is created ";
 }else{
     echo"Not created database ";
 }


?>