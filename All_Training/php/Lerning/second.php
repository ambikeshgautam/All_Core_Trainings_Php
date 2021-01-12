<?php
#In php these are some NO of keywords are (e.g if,else,while,echo etc),function are case sensitive .
// #Varible are alos Case sensitive 
// ECHO "Hello world !";
// echo "Hello world ";
// Echo "Hello world ";
// #==============================Let's see other example of the case sensitive=============================
// $car = "red";
// $truck = "blue";

// echo "this will not show the color of the car ".$Car."<br/>";
// echo "this will show the color of the car ".$car."<br/>";
// echo "this will not show the color of the car again because this is case sensitive ".$caR."<br/>";
// echo "This is the color of the truck ".$truck."<br/>";
// // echo "This is the color of the car ".$TRUCK."<br/>";
// $txt = "aakhey.com";
// echo "I love $txt !"."</br>";
// // this is other way 
// $txt = "aakhey.com";
// echo "I LOVE".$txt."!"."</br>";
// $x = 5;
// $y = 4;
// echo $x+$y;
//                         PHP IS A LOOSELY TYPE LANGUAGE
// In the example above, notice that we did not have to tell PHP which data type the variable is.

// PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

// In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

// You will learn more about strict and non-strict requirements, and data type declarations in the PHP Functions chapter.



//                           PHP Variables Scope
// // IN  ph p, varia, variables can be declared anywhere in the script.

// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:

//     local
//     global
//     static
//  $x = 5;// global varaible
//  function myTest(){
//      // using x inside this function will generate a error
//      echo "<p> Varible x inside functino is :$x </p>";

//  }
//  myTest();
//  echo "<p> Variable x outsite function is : $x </p>";
 
//  


?>