<?php
// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.

$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    $next = $first + $second;
    
    if ($next > 100) {
        break;
    }
    
    echo ("$next ");

    $first = $second;
    $second = $next;
}
?>