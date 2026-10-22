<?php
// PHP Week 2 - Lesson 2.4: Operators Part 2

// Comparison operators.
var_dump(10 > 15);       // false
var_dump(10 === "10");   // false: different types
var_dump(10 == "10");    // true: loose comparison
var_dump(20 >= 18);      // true
var_dump(5 != 3);        // true

// Logical operators.
$age = 20;
var_dump($age >= 18 && $age < 30); // true
var_dump($age < 18 || $age === 20); // true

$isLearning = true;
var_dump(!$isLearning); // false

// Increment and decrement.
$x = 7;
$x++;
echo $x . PHP_EOL; // 8

$score = 10;
$score--;
echo $score . PHP_EOL; // 9

// String concatenation.
$a = "Good";
$b = " morning";
echo $a . $b . PHP_EOL; // Good morning

$message = "Hello";
$message .= " Victor";
echo $message . PHP_EOL; // Hello Victor
?>
