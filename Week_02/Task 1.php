<?php
// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.

function printEvenNumbersUsingForLoop($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1;
    }

    for ($i = $start; $i <= $end; $i += $step) {
        echo("Using For Loop : $i\n");
    }
}

function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1;
    }
    
    while($start <= $end) {
    echo ("Using While Loop : $start \n");
    $start += $step;
    }
}

function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1;
    }

    do {
        echo ("Using Do While Loop : $start \n");
        $start += $step;
    } while ($start <= $end);
}

printEvenNumbersUsingForLoop(1, 20, 2);
echo (" \n");
printEvenNumbersUsingWhileLoop(2, 20, 2);
echo (" \n");
printEvenNumbersUsingDoWhileLoop(2, 20, 2);
?>