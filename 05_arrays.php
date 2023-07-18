<?php

// Create array
$arr1 = [1, 2, 3, 4, 5, 6];
$arr2 = [7, 8, 9, 10, 11, 12, 13, 14];
// print_r([...$arr1, ...$arr2]);
// echo '<br>';
// Print the whole array
print_r($arr1);
echo '<br>';
// Get element by index
echo ($arr1[1]);
echo '<br>';
// Set element by index
$arr1[0] = 0;
// Check if array has element at index 2
in_array(2, $arr1);
// Append element
var_dump(array_unshift($arr1, 12));
echo '<br>';
echo "<pre>";
var_dump($arr1);
echo '</pre>';
echo '<br>';
// Print the length of the array
echo count($arr1);
echo '<br>';
// Add element at the end of the array
array_push($arr1, 12);
echo "<pre>";
var_dump($arr1);
echo '</pre>';
// Remove element from the end of the array
array_pop($arr1);
echo "<pre>";
var_dump($arr1);
echo '</pre>';
// Add element at the beginning of the array
array_pop($arr1);
echo "<pre>";
var_dump($arr1);
echo '</pre>';
// Remove element from the beginning of the array
$beg = array_shift($arr1);
echo $beg . '<br>';
echo "<pre>";
var_dump($arr1);
echo '</pre>';
// Split the string into an array
$arr3 = explode('.', "1.2.3.4.5.6.7.8.9.10");
echo "<pre>";
var_dump($arr3);
echo '</pre>';
// Combine array elements into string
$str3 = join('.', $arr3);
echo "<pre>";
var_dump($str3);
echo '</pre>';
// Check if element exist in the array
in_array(2, $arr3);
// Search element index in the array
array_search(2, $arr3);
// Merge two arrays
echo "<pre>";
$arr3 = [...$arr1, ...$arr2];
var_dump($arr3);
echo '</pre>';
// Sorting of array (Reverse order also)
sort($arr3);
echo "<pre>";
var_dump($arr3);
echo '</pre>';
// Filter, map, reduce of array
$number = array_filter($arr3, fn ($num) => $num > 5);
echo "<pre>";
var_dump($arr3);
var_dump($number);
echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$as_array = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5,
    "six" => 6,
];
// Get element by key
echo "<pre>";
var_dump($as_array['one']);
echo '</pre>';
// Set element by key
echo "<pre>";
$as_array['one'] = 11;
var_dump($as_array['one']);
echo '</pre>';
// Check if array has specific key
echo "<pre>";
var_dump(array_key_exists('d', $as_array));
echo '</pre>';
// Print the keys of the array
// foreach ($as_array as $key => $value) {
//     # code...
//     echo "<pre>";
//     var_dump($key);
//     echo '</pre>';
// }
echo "<pre>";
var_dump(array_values($as_array));
echo '</pre>';
// Print the values of the array
echo "<pre>";
var_dump(array_keys($as_array));
echo '</pre>';
// foreach ($as_array as $key => $value) {
//     # code...
//     echo "<pre>";
//     var_dump($value);
//     echo '</pre>';
// }
// Sorting associative arrays by values, by keys
echo "<pre>";
var_dump(array_keys($as_array));
echo '</pre>';
// Two dimensional arrays