<?php
function addExpenses($name, $amount, $category){
    echo "Expense Name: " . $name . "<br>";
    echo "Amount: N" . $amount . "<br>";
    echo "Category: " . $category . "<br>";
}
addExpenses("Rice", 15000, "Food");
?>
