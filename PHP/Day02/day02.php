<?php

// ========================================
// DAY 2 - PHP CONDITIONS & OPERATORS
// ========================================

// ----------------------------------------
// 1. VARIABLES
// ----------------------------------------

$studentName = "Vinay";
$age = 20;
$requiredAge = 18;
$salary = 500000;
$documentsSubmitted = true;
$isBlocked = false;


// ----------------------------------------
// 2. COMPARISON OPERATORS
// ----------------------------------------

// Greater than >
if ($age > 18) {
    echo "Age is greater than 18." . PHP_EOL;
}

// Greater than or equal to >=
if ($age >= $requiredAge) {
    echo "Age requirement satisfied." . PHP_EOL;
}

// Less than <
if ($age < 25) {
    echo "Age is less than 25." . PHP_EOL;
}

// Less than or equal to <=
if ($age <= 20) {
    echo "Age is 20 or below." . PHP_EOL;
}

// Equal value ==
if ($age == 20) {
    echo "Age is equal to 20." . PHP_EOL;
}

// Strict equal ===
if ($age === 20) {
    echo "Age is exactly integer 20." . PHP_EOL;
}

// Not equal !=
if ($age != 25) {
    echo "Age is not 25." . PHP_EOL;
}

// Strict not equal !==
if ($age !== "20") {
    echo "Integer 20 and string 20 are not the same type." . PHP_EOL;
}


// ----------------------------------------
// 3. BOOLEAN VALUES
// ----------------------------------------

if ($documentsSubmitted) {
    echo "Documents have been submitted." . PHP_EOL;
}

if (!$isBlocked) {
    echo "Student is not blocked." . PHP_EOL;
}


// ----------------------------------------
// 4. AND OPERATOR &&
// ----------------------------------------

if ($age >= $requiredAge && $documentsSubmitted) {
    echo "Age and document requirements are satisfied." . PHP_EOL;
}


// ----------------------------------------
// 5. OR OPERATOR ||
// ----------------------------------------

$hasEntranceExam = false;
$hasManagementQuota = true;

if ($hasEntranceExam || $hasManagementQuota) {
    echo "Student has an admission route." . PHP_EOL;
}


// ----------------------------------------
// 6. NOT OPERATOR !
// ----------------------------------------

if (!$isBlocked) {
    echo "Student can access the system." . PHP_EOL;
}


// ----------------------------------------
// 7. IF / ELSE
// ----------------------------------------

if ($age >= $requiredAge) {
    echo "Student is eligible based on age." . PHP_EOL;
} else {
    echo "Student is not eligible based on age." . PHP_EOL;
}


// ----------------------------------------
// 8. COMBINING EVERYTHING
// ----------------------------------------

if ($age >= $requiredAge && $documentsSubmitted && !$isBlocked) {
    echo "Student is eligible for admission." . PHP_EOL;
} else {
    echo "Student admission requirements not met." . PHP_EOL;
}