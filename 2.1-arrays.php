<?php
// PHP Week 2 - Lesson 2.1: Arrays

// Indexed arrays use numeric indexes starting at 0.
$foods = ["rice", "pounded yam", "eba"];
echo $foods[0] . PHP_EOL;
echo $foods[1] . PHP_EOL;

// Add an item to the array.
$foods[] = "beans";
print_r($foods);

// Associative arrays use named keys.
$student = [
    "name" => "Felix",
    "age" => 30,
    "country" => "Ghana"
];
echo $student["name"] . PHP_EOL;
echo $student["age"] . PHP_EOL;

// Multidimensional array.
$students = [
    ["name" => "Ada", "score" => 85],
    ["name" => "Tunde", "score" => 72]
];
echo $students[0]["name"] . " scored " . $students[0]["score"] . PHP_EOL;
?>
