<?php
$inputTemperature = readline("Input your temperature : ");
$choice = readline("For Celsius to Fahrenheit write 1 & for Fahrenheit to Celsius write 2 : ");

$celciusToFareheit = (($inputTemperature * 9) / 5) + 32;
$farenheitToCelcius = (($inputTemperature - 32) * 5) / 9;

if($choice == 1) {
    echo "Your result : $celciusToFareheit Degree Farenheit.";
}
else {
    echo "Your result : $farenheitToCelcius Degree Celcius.";
}
?>