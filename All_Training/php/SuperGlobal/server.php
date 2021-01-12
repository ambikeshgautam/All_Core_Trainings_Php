<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serverpractice</title>
</head>
<body>
<?php
echo $_SERVER['PHP_SELF'];//LOcation of the directory of the hoting folder
echo "<br>";
echo $_SERVER['SERVER_NAME'];//server name
echo "<br>";
echo $_SERVER['HTTP_HOST'];//host address of the website
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//browser name and version of the clientside
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//script name
echo "<br>";

?>
    
</body>
</html>