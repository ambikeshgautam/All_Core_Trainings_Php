<?php

$conn = mysqli_connect("localhost","root","");
if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
}else{
    echo "Connection Ok !";

}

?>