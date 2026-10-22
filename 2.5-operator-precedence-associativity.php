<?php
// PHP Week 2 - Lesson 2.5: Operator Precedence and Associativity

// Precedence determines which operator is evaluated first.
echo 5 + 3 * 2 . PHP_EOL;   // 11: multiplication first
echo (5 + 3) * 2 . PHP_EOL; // 16: parentheses first

// Associativity determines grouping for operators of the same precedence.
echo 20 - 5 - 3 . PHP_EOL;  // 12: (20 - 5) - 3
echo 18 / 3 * 2 . PHP_EOL;  // 12: (18 / 3) * 2

$total = (10 + 5) * 2;
echo $total . PHP_EOL; // 30
?>
