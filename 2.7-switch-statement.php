<?php
// PHP Week 2 - Lesson 2.7: Switch Statement

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the work week" . PHP_EOL;
        break;

    case "Friday":
        echo "Almost the weekend" . PHP_EOL;
        break;

    default:
        echo "Another day" . PHP_EOL;
}

// Grade example.
$grade = "A";

switch ($grade) {
    case "A":
        echo "Excellent" . PHP_EOL;
        break;

    case "B":
        echo "Good" . PHP_EOL;
        break;

    default:
        echo "Try again" . PHP_EOL;
}
?>
