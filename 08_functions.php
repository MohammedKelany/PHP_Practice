<?php

// Function which prints "Hello I am TheCodeholic"
function print_name($name)
{
    # code...
    echo "<pre>";
    echo ("Hello I am $name");
    echo '</pre>';
}
print_name("TheCodeholic");
print_name("Mr Beast");
print_name("TheCodeholic");
// Create sum of two functions
function sum2num($num1, $num2)
{
    return $num1 + $num2;
}
echo "<pre>";
echo (sum2num(12, 13));
echo '</pre>';
// Create function to sum all numbers using ...$nums
function sumnums(...$nums)
{
    return array_reduce($nums, fn ($carry, $num) => $carry + $num);
}
echo "<pre>";
echo (sumnums(12, 13, 25));
echo '</pre>';
// Arrow functions