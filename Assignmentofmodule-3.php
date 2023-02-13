<?php

// Reusable PHP Function that can check Even & Odd Number and Return Decision.

function even_and_odd($num) {
    if ($num % 2 == 0) {
      return "$num is an even number.";
    } else {
      return "$num is an odd number.";
    }
  }

    $number = 8;
    echo even_and_odd($number);
      
    echo "\n";
      
    $number = 9;
    echo even_and_odd($number); // check Even & Odd Number and Return.

echo "\n";
 
// 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
for ($x = 1; $x <= 100; $x++) {
  $sum += $x;
}

  echo " The series 1+2+3..... + 100 = $sum"; // loop to calculate the summation.



  
