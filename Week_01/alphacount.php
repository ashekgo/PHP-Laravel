<?php
$input = readline("Please enter the word/sentence to count alphabet : ");

$specialCharacterDB = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "{", "}", "[", "]", "|", "'", ":", ";", "'", "<", ">", ",", ".", "?", "/", " ");

$stringReplaced = str_replace($specialCharacterDB, "", $input);

$alphaCount = strlen($stringReplaced);

echo "You given string has total $alphaCount letters without speacial charcaters.";
?>