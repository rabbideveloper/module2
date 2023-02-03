<?php

// PHP Variable
// Variables are "containers" for storing information
/*===================
*  Starts with the $ sign
*  Must Start with a letter or the underscore character
*  Cannot start with a number
*  Only contain alpha-numeric characters and underscore
*  Variable names are case-sensitive
=======================*/

//$number1 = 10;
//$number2 = 20;
//
//$totalNumber = $number1 + $number2;
//
//echo $totalNumber;


//$num = 100; // Global scope
//
//function myTest(){
//
//    echo "Variable x inside function is : \n";
//}
//
//myTest();
//
//echo "Variable x outside function is : {$num}";

//function myTest1(){
//    $x = 5; // local scope
//
//    echo "Variable x inside is: {$x}.";
//}
//
//myTest1();

$x = 5;
$y = 10;

function myTest(){
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;



