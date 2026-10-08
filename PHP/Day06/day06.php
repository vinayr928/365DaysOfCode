<?php

// Day 06 - Working with Student Records

$students = [
    [
        "Name" => "Vinay",
        "Marks" => 85,
        "Status" => "Active"
    ],
    [
        "Name" => "Rahul",
        "Marks" => 35,
        "Status" => "Active"
    ],
    [
        "Name" => "Priya",
        "Marks" => 72,
        "Status" => "Active"
    ]
];


// Step 1: Display all students

echo "All Students:" . PHP_EOL;

foreach ($students as $student) {
    echo $student["Name"] . " - " . $student["Marks"] . " - " . $student["Status"] . PHP_EOL;
}


// Step 2: Filter students who passed

echo PHP_EOL . "Passed Students:" . PHP_EOL;

foreach ($students as $student) {
    if ($student["Marks"] >= 40) {
        echo $student["Name"] . " - " . $student["Marks"] . PHP_EOL;
    }
}


// Step 3: Change status of students who scored below 40

foreach ($students as $index => $student) {
    if ($student["Marks"] < 40) {
        $students[$index]["Status"] = "Inactive";
    }
}


// Step 4: Display students after status update

echo PHP_EOL . "Students After Status Update:" . PHP_EOL;

foreach ($students as $student) {
    echo $student["Name"] . " - " . $student["Marks"] . " - " . $student["Status"] . PHP_EOL;
}


// Step 5: Display only active students who passed

echo PHP_EOL . "Active Students Who Passed:" . PHP_EOL;

foreach ($students as $student) {
    if ($student["Marks"] >= 40 && $student["Status"] == "Active") {
        echo $student["Name"] . " - " . $student["Marks"] . " - " . $student["Status"] . PHP_EOL;
    }
}

?>