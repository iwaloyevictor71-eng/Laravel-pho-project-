<?php
// PHP Week 2 - Lesson 2.3: Operators Part 1

$a = 17;
$b = 5;

// Arithmetic operators.
echo $a + $b . PHP_EOL;  // 22: addition
echo $a - $b . PHP_EOL;  // 12: subtraction
echo $a * $b . PHP_EOL;  // 85: multiplication
echo $a / $b . PHP_EOL;  // 3.4: division
echo $a % $b . PHP_EOL;  // 2: remainder
echo $a ** 2 . PHP_EOL;  // 289: exponentiation

// Assignment operators.
$number = 20;
$number += 8;
echo $number . PHP_EOL; // 28

$price = 100;
$price *= 3;
echo $price . PHP_EOL; // 300

$number = 8;
$number -= 3;
$number *= 4;
echo $number . PHP_EOL; // 20
?>
