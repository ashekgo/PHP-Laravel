<?php
$elementsForPass = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
$passLength = 12;

function generatePassword($elements, $length) {
    $characters = str_split($elements);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, count($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

echo generatePassword($elementsForPass, $passLength);
?>