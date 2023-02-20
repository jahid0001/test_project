<?php

// 1. Sort an array of strings by their length in ascending order

$strings = array("mango", "pear", "banana", "cat");

function sort_strings_length($sort) {
  usort($sort, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $sort;
}

$sorted_strings = sort_strings_length($strings);
print_r($sorted_strings);


// 2. Concatenate two strings, but with the second string starting from the end of the first string


function concatenate($str1, $str2) {
  return $str1 . strrev($str2);
}

$string1 = "hello";
$string2 = "world";
$result = concatenate($string1, $string2);
echo $result;

echo "\n";

// 3. Remove the first and last element from an array and return the remaining elements as a new array

$numbers = array(11, 20, 25, 44, 55);

function remove($rem) {
  array_shift($rem);
  array_pop($rem);
  return $rem;
}

$new_numbers = remove($numbers);
print_r($new_numbers);


// 4. Check if a string contains only letters and whitespace

$string = "This is a valid string";

function letters_and_whitespace($str) {
  return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$is_valid = letters_and_whitespace($string);
echo $is_valid;

echo "\n";

// 5. Find the second largest number in an array of numbers


$numbers = array(111, 955, 444, 810, 205, 211, 458, 354);

function second_largest_num($num) {
  rsort($num);
  return $num[1];
}

$second_largest = second_largest_num($numbers);
echo $second_largest;







  
