<?php
// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.

function fibonacci($old, $new, $end) {
    static $start;
    $start = $start ?? 1;
    if($start > $end) {
        return 1;
    }
    $start++;

    echo $old." ";
    $_temporary = $old + $new;
    $old = $new;
    $new = $_temporary;

    fibonacci ($old, $new, $end);
}
fibonacci(0,1,15)
?>