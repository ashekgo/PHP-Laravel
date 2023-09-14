<?php
$firstNumber = readline("Please enter first number : ");
$secondNumber = readline("Please input second number : ");

$compare = ($firstNumber > $secondNumber) ? "$firstNumber is larger than $secondNumber" : "$secondNumber is larger than $firstNumber";

echo $compare;
?>