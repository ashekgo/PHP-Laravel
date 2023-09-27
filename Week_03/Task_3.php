<?php
$grades = [85, 92, 78, 88, 95];

function descendingOrderGrades($gradesParam) {
    rsort($gradesParam);
    return $gradesParam;
}

echo implode(",", descendingOrderGrades($grades));
?>