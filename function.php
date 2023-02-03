<?php

function writeMsg(){
    echo "Hello World! \n";
}

//writeMsg(); // call the function
//
//function familyName($fname){
//    echo "{$fname} Devs\n";
//}
//
//familyName("Rabbi Sheikh");
//familyName("Siam Sheikh");
//familyName("Samia Khanom");
//familyName("Salman Sheikh");
//
//
//function familyMemberList($fname,$year)
//{
//    echo "{$fname} devs. Born in {$year}.\n";
//}
//
//familyMemberList("Rabbi Sheikh",2001);
//familyMemberList("Siam Sheikh",2004);
//familyMemberList("Samia Khanom",2016);
//familyMemberList("Salman Sheikh",2008);


//function addNumbers(int $a,int $b){
//    return $a + $b;
//}
//
//echo addNumbers(5,5);


function addFive(&$value)
{
    $value += 5;
}
$num = 2;
addFive($num);

echo $num;
















