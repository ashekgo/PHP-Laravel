<?php
$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulation($textParam) {
    $lowerCase = strtolower($textParam);
    $stringReplace = str_replace("brown", "red", $lowerCase);
    return $stringReplace;
}

echo stringManipulation($text);
?>