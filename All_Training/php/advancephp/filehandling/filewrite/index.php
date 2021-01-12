<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filewriting</title>
</head>
<body>
<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 
</body>
</html>