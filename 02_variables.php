<?php

// What is a variable

// Variable types
/*
this is the types of variables in php
bool
int
float
double
null
array
object
recource
*/
// print_r("array => " . $array . "<br>");
// Declare variables
$bool = true;
$int = 13;
$float = 12.4;
$double = 1000.3;
$null = null;
$array = [1, 2, 3, 4, 5, 6];

// Print the variables. Explain what is concatenation
echo '<pre>';
echo "printing the variable <br>\n";
echo $bool . "\n";
echo $int . "\n";
echo $float . "\n";
echo $double . "\n";
echo $array[0] . "\n";
echo $null . "\n";
echo '</pre>';
// Print types of the variables
echo '<pre>';
echo "printing the type of variable <br>\n";
echo gettype($bool) . "\n";
echo gettype($int) . "\n";
echo gettype($float) . "\n";
echo gettype($double) . "\n";
echo gettype($array) . "\n";
echo gettype($array[0]) . "\n";
echo gettype($null) . "\n";
echo '</pre>';
// Print the whole variable
echo '<pre>';
echo "printing the whole variable <br>\n";
var_dump($bool);
var_dump($int);
var_dump($float);
var_dump($double);
var_dump($array);
var_dump($array[0]);
var_dump($null);
// echo  . "\n";
echo '</pre>';
// Change the value of the variable
$int = "string";
// Print type of the variable
echo "printing the whole variable after modify <br>\n";
var_dump($int);
// Variable checking functions
echo '<br>';
echo (var_dump(is_int($int)));
// Check if variable is defined
var_dump(isset($int));
// Constants
define("CAR", 12);
echo '<br>';
echo (CAR);
// Using PHP built-in constants
echo '<br>';
echo PHP_INT_MAX;
