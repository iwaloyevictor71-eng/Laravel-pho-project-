<?php
// PHP Week 2 - Lesson 2.0: Null Data Type

$country = null;
var_dump($country); // NULL

$score = null;
var_dump(is_null($score)); // bool(true)

$name = "Victor";
var_dump($name);
$name = null;
var_dump($name); // NULL

// NULL is different from 0, false, and an empty string.
$a = null;
$b = 0;
$c = false;
$d = "";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
?>
