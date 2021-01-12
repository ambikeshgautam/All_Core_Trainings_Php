<?php 
$value = "ambikesh";
$exp = time() + 86400;
setcookie("name", $value ,$exp);

 

 $value = "modifiedcookies";
 $exp = time() + 86400;
 setcookie("name", $value ,$exp);

 echo $_COOKIE ['name']; 

// set the expiration date to one hour ago
setcookie("name", "", time() - 86400);

echo "Cookies has deleted";
            
 
?>