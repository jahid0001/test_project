<?php

// Build a very simple commission-calculating calculator for HF consultancy Admission agents: tuition fee = (7000 to 20000 dollars above)

$tuition_fee = 12000;


$addcommission =($tuition_fee>= 20000)? "{$tuition_fee} to pay 25% commission" : (($tuition_fee>= 10000? "{$tuition_fee} to pay 20% commission" : 
                (($tuition_fee>= 7000 && $tuition_fee <10000? "{$tuition_fee} to pay 15% commission" : 
                "Data is invalid : Tuition fee must be above 7000 Dollars")))); 

echo $addcommission;  

// simple calculator using a ternary operator in Php.


