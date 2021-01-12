<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postmethod</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Name: <input type="text" name="name">
<input type="submit">

</form>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
     
    $name = htmlspecialchars($_REQUEST['name']);
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo $name;
    }
}

?>
    
</body>
</html>