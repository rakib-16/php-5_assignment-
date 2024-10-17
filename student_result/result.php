<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $numSubjects = count($marks);
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
        if ($mark < 33) {
            echo "The student has failed.\n";
            return;
        }
        $totalMarks += $mark;
    }

    $averageMarks = $totalMarks / $numSubjects;

    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 59):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 49):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 39):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade<br>";
}

$marks = [55, 47, 67, 89, 66];
calculateResult($marks);

?>
