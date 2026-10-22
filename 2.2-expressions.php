<?php
// PHP Week 2 - Lesson 2.2: Expressions

$a = 15;
$b = 5;

// Arithmetic expressions.
echo $a * $b . PHP_EOL; // 75
echo $a / $b . PHP_EOL; // 3

// Comparison expression.
$age = 20;
var_dump($age >= 18); // bool(true)

// String concatenation expression.
$firstName = "Victor";
$country = "Nigeria";
$message = $firstName . " is from " . $country;
echo $message . PHP_EOL;

// Logical expression.
$age = 16;
var_dump($age >= 18 && true); // bool(false)
?>
