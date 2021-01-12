
<!DOCTYPE html>
<html>
<body>
<!-- this is file-end-of-file feof()is used to find the end of the file -->
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

</body>
</html>
