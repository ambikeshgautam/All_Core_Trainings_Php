
<?php

$array=array('33', '12', '67', '78', '20', '19', '1');

echo "Unsorted Values are: ";
print_r($array);
echo "<br/>";


					//count function return the length of the array 
for($value=0; $value<count($array); $value++) {

    for($index = 0; $index < count($array)-1; $index++){


        if($array[$index] > $array[$index+1]) {

            $temp = $array[$index+1];
            $array[$index+1]=$array[$index];
            $array[$index]=$temp;
        }       
    }
}

echo "Sorted Values are: ";
print_r($array);
echo "<br />";
?>