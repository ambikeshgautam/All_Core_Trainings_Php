
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
echo "<br>";
echo fgets($myfile);
fclose ($myfile);




?>

</body>
</html>
