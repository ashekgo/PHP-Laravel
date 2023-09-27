<?php
$studentGrades = [
    ['Math' => 80, 'English' => 70, 'Science' => 90],
    ['Math' => 90, 'English' => 60, 'Science' => 90],
    ['Math' => 90, 'English' => 80, 'Science' => 70]
];

function calculateAverageGrades($studentGradesParam) {
    $averages = [];

    foreach ($studentGradesParam as $student) {
        $total = 0;
        foreach ($student as $subject => $grade) {
            $total += $grade;
        }
        $average = $total / count($student);
        $averages[] = $average;
    }

    return $averages;
}

$averageGrades = calculateAverageGrades($studentGrades);

foreach ($averageGrades as $index => $average) {
    echo "Average grade for Student index no. $index : $average .\n";
}
?>