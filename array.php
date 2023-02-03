<?php

//$cars = array("Volvo","BMW","Toyota");
//$arrLength = count($cars);
//
//$name = ["Rabbi","Siam","Salman","Samia"];

//var_dump($name);

//echo "I like ".$cars[1].", ".$cars[0]." and ".$cars[2].".";

//echo count($cars);

//for($x = 0; $x < $arrLength;$x++){
//    echo $cars[$x];
//    echo "\n";
//}

//foreach ($cars as $car) {
//    echo $car . "\n";
//}

//$age = ["rabbi"=>21,"siam"=>18,"salman"=>14,"samia"=>5];
//
//echo "Rabbi is ".$age['rabbi']." years old";


//$cars = array(
//    array("Volvo",22,18),
//    array("BMW",15,18),
//    array("Saab",5,2),
//    array("Land Rover",17,15)
//);



//echo $cars[3][0]." is my favourite cars";

//var_dump(sort($cars));

$cars = array("Volvo","BMW","Toyota");

sort($cars);
//
//$cLength=count($cars);
//
//for ($x=0;$x<$cLength;$x++){
//    echo $cars[$x];
//    echo "\n";
//}

foreach ($cars as $car) {
    echo $car;
    echo "\n";
}














