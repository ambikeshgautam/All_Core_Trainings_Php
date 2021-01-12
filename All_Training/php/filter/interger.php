<?php
$int = 100;
 if(!filter_var($int, FILTER_VALIDATE_INT)===false){
     echo"Integer is valid";

 }
 else{
     echo "Inter is not valid";
 }
?>