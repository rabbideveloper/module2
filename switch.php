<?php

//$day = "friday";
//
//switch ($day){
//    case 'fsfds' :
//        echo "Today is Friday";
//        break;
//    case 'saturday' :
//        echo "Today is Saturday";
//        break;
//    case 'sunday' :
//        echo "Today is Sunday";
//        break;
//    case 'monday' :
//        echo "Today is monday";
//        break;
//    case 'tuesday' :
//        echo "Today is Tuesday";
//        break;
//    case 'wednesday':
//        echo "Today is Wednesday";
//        break;
//    case 'thursday' :
//        echo "Today is Thursday";
//        break;
//    default :
//        echo "Not a valid day enter";
//}


//$a = 1042324;
//$b = 544;
//$c = 5065464564564;
//
//switch ($a){
//    case $a > $b :
//        switch ($a){
//            case $a > $c :
//                echo "A is large number";
//        }   break;
//    case $b > $c :
//        echo "B is large number";
//        break;
//    default :
//        echo "C is large number";
//}

//
//$a = 1;
//switch ($a){
//    case $a % 2 == 0 :
//        echo "Even number";
//        break;
//    default :
//        echo "Odd number";
//}
//



//
//$num1 = 10;
//$num2 = 20 ;
//$num3 = 30 ;
//
//$largest = $num1 = $num2 = $num3;
//
//switch(true) {
//    case ($num2 > $largest):
//        $largest = $num2;
//        break;
//    case ($num3 > $largest):
//        $largest = $num3;
//        break;
//}
//
//echo "The largest number is: $largest";
//
//

//$n = 11;
//
//$result = $n % 2;
//
//switch ($result){
//    case 0 :
//        echo "{$n} is an even number";
//        break;
//    default :
//        echo "{$n} is an odd number";
//}
//

//$a = 10;
//$b = 20;
//$c = 5;
//
//switch (true){
//    case ($a > $b) :
////    case ($a > $c) :
//        echo "A is Large number";
//        break;
//    case ($b > $c):
//        echo "B is large number";
//        break;
//    default :
//        echo  "C is large number";
//}


$a = 1000;

$b = 30;

$c = 200;

switch (true)
{
    case ($a > $b) :
        switch (true){
            case ($a > $c) :
                echo "{$a} is large number";
                break;
        }
        break;
    case ($b > $c) :
        echo "{$b} is large number";
        break;
    default :
        echo "{$c} is large number";
}































