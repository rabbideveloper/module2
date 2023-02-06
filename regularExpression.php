<?php

//$string = "Visit W3Schools W3Schools W3Schools W3Schools";
//
//$pattern = "/w3schools/i";
//
//echo preg_match_all($pattern,$string);

//$string = "Welcome Siam";
//$pattern = "/siam/i";
//
//echo preg_replace($pattern,"Rabbi Sheikh",$string);

$input = [
    "It is 5 o'clock",
    "40 days",
    "No numbers here",
    "In the year 2000"
];

$result = preg_filter('/[0-9]+/', '($0)', $input);
print_r($result);