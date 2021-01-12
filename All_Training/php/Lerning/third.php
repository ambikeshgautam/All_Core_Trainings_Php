<?php
//this global variable in   php
// To access a variable in php globaly we use global variable 
//The global keyword is used to access a global variable from within a function.

// To do this, use the global keyword before the variables (inside the function):

// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15

//=====================================These are some variables in php are==========================================
 /* There are three Type most Commonn variable are 
 
 1.........LOCAL VARIABLE
 2.........GLOBAL VARIABLE
 3.........STATIC VARIABLE
 4..........PHP The global Keyword
 ...................................................................................................................
 LOCAL variable are those variable which are only accessible within a function not out side of the function 
 .................................................................................................................................
 GLOBAL variable are those variable that are accessible from any where out or indiside the function , they are globally accessible 
 ...................................................................................................................
 STATIC variable are those variable in which they are  remain constant After the execution of the function
 somehow if we want some variable should not change After the Execution of the function we keep them as a static variable
 ...
 Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want
  a local variable NOT to be deleted. We need it for a further job.
 ................................................................................................................................
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

 
................................................................................................................................
                                Exmaple of the local variable
................................................................................................................................
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
................................................................................................................................
                                EXAMPLE OF GLOBAL VARIABLE
................................................................................................................................

    
$x = 5;// GLOBAL SCOP
$y = 10;//GLOBAL SCOP

function myTest() {

    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
................................................................................................................................
                                  EXAMPLE OF  STATIC VARIABLE
................................................................................................................................

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();//0
myTest();//1
myTest();//2
................................................................................................................................
                                  EXAMPLE OF  GLOBAL KEYWORDS
................................................................................................................................

*/
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15


?>