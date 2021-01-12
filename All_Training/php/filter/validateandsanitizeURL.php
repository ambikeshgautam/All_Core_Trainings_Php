<?php
$url = "http://www.aakhey.com";
// Remove all illegal character from url
$url = filter_var($url, FILTER_SANITIZE_URL);
//valid url
if(!filter_var($url, FILTER_SANITIZE_URL)===false){
    echo("$url is a valid URL");
}else{
    echo("$url is not a valid URL");
}
?>