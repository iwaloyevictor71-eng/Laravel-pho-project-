<?php
// PHP Week 2 - Lesson 2.6: Control Structures (if, elseif, else)

// Basic if/else.
$age = 18;
if ($age >= 18) {
    echo "Eligible" . PHP_EOL;
} else {
    echo "Not eligible" . PHP_EOL;
}

// if / elseif / else.
$score = 65;
if ($score >= 80) {
    echo "Grade A" . PHP_EOL;
} elseif ($score >= 60) {
    echo "Grade B" . PHP_EOL;
} else {
    echo "Grade C" . PHP_EOL;
}

// Conditions with a logical operator.
$hasTicket = true;
$hasId = true;
if ($hasTicket && $hasId) {
    echo "You may enter" . PHP_EOL;
} else {
    echo "Entry not allowed" . PHP_EOL;
}
?>
