<?php
$int =0;
if(filter_var($int,FILTER_VALIDATE_INT)=== 0||!filter_var($int, FILTER_VALIDATE_INT)===false){
 echo"Interger is valid";
}else{
    echo "inter is not valid";
}
?>