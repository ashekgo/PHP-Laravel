

<?php
$inputTemperature = readline("Please enter todays temperature : ");

if($inputTemperature <= 10) {
    echo "It's freezing!";
} else if ($inputTemperature <= 20) {
    echo "It's cool.";
} else if ($inputTemperature <= 35) {
    echo "It's warm.";
} else if ($inputTemperature <= 50){
    echo "It's very hot.";
} else {
    echo "Please leave the earth and settle in Mars.";
}
?>