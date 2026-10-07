<?php

$students = [
    ["name" => "Vinay", "marks" => 85],
    ["name" => "Rahul", "marks" => 35],
    ["name" => "Priya", "marks" => 72],
    ["name" => "Arun", "marks" => 28],
    ["name" => "Kiran", "marks" => 91]
];

function checkResult($marks)
{
    if ($marks >= 40) {
        return "Pass";
    }

    return "Fail";
}

$totalStudents = 0;
$passedStudents = 0;
$failedStudents = 0;
$totalMarks = 0;

foreach ($students as $student) {

    $result = checkResult($student["marks"]);

    echo $student["name"] . " - " . $result . PHP_EOL;

    $totalStudents++;

    if ($result == "Pass") {
        $passedStudents++;
    } else {
        $failedStudents++;
    }

    $totalMarks = $totalMarks + $student["marks"];
}

$averageMarks = $totalMarks / $totalStudents;

echo PHP_EOL;

echo "Total Students: " . $totalStudents . PHP_EOL;
echo "Passed: " . $passedStudents . PHP_EOL;
echo "Failed: " . $failedStudents . PHP_EOL;
echo "Total Marks: " . $totalMarks . PHP_EOL;
echo "Average Marks: " . $averageMarks . PHP_EOL;