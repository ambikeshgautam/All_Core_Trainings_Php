<?php
$email = "ambikesh.gautam@email.com";
//remove illegal characters from email
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
//VALIDATE EMAIL-ID
if(!filter_var($email,FILTER_SANITIZE_EMAIL)===false){
    echo("$email is a valid email address");
}else{
    echo("$email is not a valid email address");
    
}
?>