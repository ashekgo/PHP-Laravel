<?php
$inputNumber = readline("Please enter any positive number : ");
$check = ($inputNumber % 2 == 0) ? "Even" : "Odd";

echo "Number $inputNumber is $check.";
?>