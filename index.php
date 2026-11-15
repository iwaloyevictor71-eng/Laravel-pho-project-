<?php.
require 'Function.php';
?>
<?php
$data = file_get_contents("expenses.json");
$expenses = json_decode($data, true);
unset($expenses[2]);
array_push($expenses, [
    "name" => "Internet",
    "amount" => 4000,
    "category" => "Bills"],
$expenses[4]["amount"] = 5000;
$total = 0;
foreach ($expenses as $expense) {
    echo "Name: " . $expense["name"] . "<br>";
    echo "Amount: ₦" . $expense["amount"] . "<br>";
    echo "Category: " . $expense["category"] . "<br>";

    $total += $expense["amount"];

}echo "Total Expenses: ₦" . $total;