<?php
echo "1 for summation\n2 for substraction\n3 for multiplication\n4 for division\n\n";
$choice = readline("Please enter your choice (1/2/3/4) : ");

if($choice <= 4 && $choice >=1 ) {

    $firstNumber = readline("Please enter first number : ");
    $secondNumber = readline("Please choice second number : ");

    $summation = $firstNumber + $secondNumber;
    $substraction = $firstNumber - $secondNumber;
    $multiplication = $firstNumber * $secondNumber;
    $division = $firstNumber / $secondNumber;

    if($choice == 1) {
        echo "Summation is : $summation";
    } else if ($choice == 2) {
        echo "Substraction is : $substraction";
    } else if ($choice == 3) {
        echo "Multiplication is : $multiplication";
    } else {
        echo "Division is : $division";
    }
}
else {
    echo "Wrong input.";
}
?>