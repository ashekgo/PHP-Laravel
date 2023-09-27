<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbersParam) {
    $oddNumbers = [];
    foreach ($numbersParam as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }
    return $oddNumbers;
}
echo implode(",", removeEvenNumbers($numbers));
?>