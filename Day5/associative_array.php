<?php
//associative array
//key = value
//method 1
$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web development";
$a[10] = "Ten";
$a[50] = 50.50;

//method 2
//always use this method an array
$a = array(
    0 => 10,
    "c" => "Computer",
    "php" => "Web development",
    10 => "Ten",
    50 => 50.50
);
echo "c for ". $a['c'];
foreach ($a as $value) {
    echo "<br> Value is $value";
}