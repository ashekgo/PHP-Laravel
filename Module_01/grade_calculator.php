<?php
$firstScore = readline("Input first test scores : ");
$secondScore = readline("Input second test scores : ");
$thirdScore = readline("Input third test scores : ");

$averageScore = ($firstScore + $secondScore + $thirdScore) / 3;

if ($averageScore >= 80) {
    echo "Your average test score is : $averageScore and your grade is A+.";
} else if ($averageScore >= 70) {
    echo "Your average test score is : $averageScore and your grade is A.";
} else if ($averageScore >= 60) {
    echo "Your average test score is : $averageScore and your grade is B.";
} else if ($averageScore >= 50) {
    echo "Your average test score is : $averageScore and your grade is C.";
} else if ($averageScore >= 40) {
    echo "Your average test score is : $averageScore and your grade is D.";
} else {
    echo "Your average test score is : $averageScore and your grade is F.";
}
?>