<?php
// assignment with ternary oparator
$amount = 25000;

$twentyFivePercent = ($amount * 25) / 100;
$twentyPercent = ($amount * 20) / 100;
$fiftenPercent = ($amount * 15) / 100;


$calculation = ($amount >= 20000) ? $twentyFivePercent : (($amount >= 10000 && $amount < 20000) ? $twentyPercent : (($amount >= 7000 && $amount < 10000) ? $fiftenPercent : "Invalid Number"));
echo $calculation;
