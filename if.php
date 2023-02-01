<?php

$a = 10;
$b = 20;
$c = 54;

if ($a > $b){
    if ($a > $c){
        echo "A is large number";
    }
}elseif ($b > $c){
    echo "B is large number";
}else{
    echo "C is large number";
}