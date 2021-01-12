<?php
/* 
    multidimensional array initialization
*/
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);

// array traversal
// find size of the array
    $size = count($cars);

// using the for loop
echo "<table border='2px'>";
for($i = 0; $i < $size; $i++)
{
    echo "<tr>";
    foreach($cars[$i] as $key => $value) {

        echo"<td>". $key ."</td><td> "." " . $value . "</td>";
    }
    echo "<tr>";
    echo "\n";
}
echo "</table>";
?>