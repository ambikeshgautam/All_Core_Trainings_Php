<!DOCTYPE html>
<html>
<body>

<?php
// Create a Date From a String With strtotime()

// The PHP strtotime() function is used to convert a human readable date string 
// into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>
