<?php 

$languages = array(); 

$languages['Python'] = array( 
	"first_release" => "1991", 
	"latest_release" => "3.8.0", 
	"designed_by" => "Guido van Rossum", 
	"description" => array( 
		"extension" => ".py", 
		"typing_discipline" => "Duck, dynamic, gradual", 
		"license" => "Python Software Foundation License"
    ) 
    
); 
$languages['PHP'] = array( 
    "first_release" => "1995",  
    "latest_release" => "7.3.11",  
    "designed_by" => "Rasmus Lerdorf", 
    "description" => array( 
        "extension" => ".php",  
        "typing_discipline" => "Dynamic, weak", 
        "license" => "PHP License (most of Zend engine 
             under Zend Engine License)" 
    ) 
); 

// foreach ($languages as $key => $value) { 
// 	echo $key . "\n"; 
// 	foreach ($value as $sub_key => $sub_val) { 
				
// 		// If sub_val is an array then again 
// 		// iterate through each element of it 
// 		// else simply print the value of sub_key 
// 		// and sub_val 
// 		if (is_array($sub_val)) { 
// 			echo $sub_key . " : <br>"; 
// 			foreach ($sub_val as $k => $v) { 
// 				echo "\t" .$k . " = " . $v . "<br>"; 
// 			} 
// 		} else { 
// 			echo $sub_key . " = " . $sub_val . "<br>"; 
// 		} 
// 	} 
// } 
foreach($languages as $key=>$value){
    echo $key."<br>";
    foreach($languages[$key] as $sub_key=>$value1){
        echo $sub_key."<br/>";
        if(is_array($value1)){
            foreach($value1 as $key1 =>$value2){
                echo $key1."=>".$value2."<br/>";

            }
        }else{
            echo  $sub_key."=>". $value1."<br/>";
        }
    }
}
?> 
