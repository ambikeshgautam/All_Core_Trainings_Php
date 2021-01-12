<?php


echo"====================================here is index array(one D array) <br/>";
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br/>";

echo"====================================here is Associative array(associativee  array) <br/>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo"====================================here is 2D array(two D array) <br/>";


$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

//====================================================sorting in array using some predefine method ========================================

// PHP - Sort Functions For Arrays

// In this chapter, we will go through the following PHP array sort functions:

//     sort() - sort arrays in ascending order
//     rsort() - sort arrays in descending order
//     asort() - sort associative arrays in ascending order, according to the value
//     ksort() - sort associative arrays in ascending order, according to the key
//     arsort() - sort associative arrays in descending order, according to the value
//     krsort() - sort associative arrays in descending order, according to the key

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo "in assending order ======================= <br/> ";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "Sort Array (Ascending Order), According to Value - asort()r ======================= <br/> ";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "Sort Array (Ascending Order), According to Key - ksort()- asort()r ======================= <br/> ";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);


echo "Sort Array (Descending Order), According to Value - arsort() ======================= <br/> ";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


echo "Sort Array (Descending Order), According to Key - krsort() ======================= <br/> ";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

?>