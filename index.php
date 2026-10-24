<?php

require_once 'utility.php';

echo "1. Tax: " . formatCurrency(calculateTax(20000, 5)) . PHP_EOL;

echo "2. Currency: " . formatCurrency(50000) . PHP_EOL;

echo "3. Slug: " . generateSlug("My First PHP Project") . PHP_EOL;

echo "4. Age: " . calculateAge("2000-05-10") . PHP_EOL;

echo "5. Email valid: ";
echo validateEmail("victor@gmail.com") ? "Yes" : "No";
echo PHP_EOL;

$students = [
    "Victor",
    "David",
    "Sarah",
    "John",
    "Mary",
    "Grace"
];

echo "6. Page 2 students:" . PHP_EOL;
print_r(paginate($students, 2, 2));

echo "7. Reference: " . generateReference() . PHP_EOL;
