<?php

// ========================================
// DAY 3 - ARRAYS
// ========================================


// 1. Indexed Array
$students = ["Rahul", "Priya", "Amit"];

echo "Indexed Array:" . PHP_EOL;

echo "Student 1: " . $students[0] . PHP_EOL;
echo "Student 2: " . $students[1] . PHP_EOL;
echo "Student 3: " . $students[2] . PHP_EOL;

echo PHP_EOL;


// 2. ERP Modules - Indexed Array
$modules = [
    "Admission",
    "Fees",
    "Employee Registration",
    "Access Management"
];

echo "ERP Modules:" . PHP_EOL;

foreach ($modules as $module) {
    echo $module . PHP_EOL;
}

echo PHP_EOL;


// 3. Associative Array
$student = [
    "name" => "Vinay",
    "age" => 25,
    "course" => "BCA"
];

echo "Student Details:" . PHP_EOL;

echo "Name: " . $student["name"] . PHP_EOL;
echo "Age: " . $student["age"] . PHP_EOL;
echo "Course: " . $student["course"] . PHP_EOL;

echo PHP_EOL;


// 4. Associative Array using foreach
echo "Student Details using foreach:" . PHP_EOL;

foreach ($student as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}

echo PHP_EOL;


// 5. Multiple Student Records - Nested Array
$students = [
    [
        "name" => "Vinay",
        "age" => 25,
        "course" => "BCA",
        "status" => "Active"
    ],
    [
        "name" => "Rahul",
        "age" => 22,
        "course" => "BTech",
        "status" => "Inactive"
    ],
    [
        "name" => "Priya",
        "age" => 23,
        "course" => "MCA",
        "status" => "Active"
    ]
];


// 6. Accessing Nested Array
echo "First Student:" . PHP_EOL;

echo "Name: " . $students[0]["name"] . PHP_EOL;
echo "Age: " . $students[0]["age"] . PHP_EOL;
echo "Course: " . $students[0]["course"] . PHP_EOL;
echo "Status: " . $students[0]["status"] . PHP_EOL;

echo PHP_EOL;


// 7. Accessing Second Student
echo "Second Student:" . PHP_EOL;

echo "Name: " . $students[1]["name"] . PHP_EOL;
echo "Age: " . $students[1]["age"] . PHP_EOL;
echo "Course: " . $students[1]["course"] . PHP_EOL;
echo "Status: " . $students[1]["status"] . PHP_EOL;

echo PHP_EOL;


// 8. Display All Students
echo "All Students:" . PHP_EOL;

foreach ($students as $student) {
    echo $student["name"] . " - " . $student["course"] . PHP_EOL;
}

echo PHP_EOL;


// 9. Display Only Active Students
echo "Active Students:" . PHP_EOL;

foreach ($students as $student) {

    if ($student["status"] == "Active") {
        echo $student["name"] . PHP_EOL;
    }
}

echo PHP_EOL;


// 10. Display Only BCA Students
echo "BCA Students:" . PHP_EOL;

foreach ($students as $student) {

    if ($student["course"] == "BCA") {
        echo $student["name"] . PHP_EOL;
    }
}

echo PHP_EOL;


// 11. Display Active BCA Students
echo "Active BCA Students:" . PHP_EOL;

foreach ($students as $student) {

    if ($student["course"] == "BCA" && $student["status"] == "Active") {
        echo $student["name"] . " - " . $student["status"] . PHP_EOL;
    }
}