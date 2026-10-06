<?php

// ========================================
// DAY 4 - FUNCTIONS
// ========================================


// 1. Basic Function
function welcome()
{
    echo "Welcome to VME" . PHP_EOL;
}

welcome();

echo PHP_EOL;


// 2. Function with a Parameter
function greetStudent($name)
{
    echo "Hello " . $name . PHP_EOL;
}

greetStudent("Vinay");
greetStudent("Priya");
greetStudent("Rahul");

echo PHP_EOL;


// 3. Function with Multiple Parameters
function showStudent($name, $course)
{
    echo "Name: " . $name . PHP_EOL;
    echo "Course: " . $course . PHP_EOL;
}

showStudent("Vinay", "BCA");

echo PHP_EOL;


// 4. Function with Three Parameters
function studentDetails($name, $course, $status)
{
    echo "Name: " . $name . PHP_EOL;
    echo "Course: " . $course . PHP_EOL;
    echo "Status: " . $status . PHP_EOL;
}

studentDetails("Vinay", "BCA", "Active");

echo PHP_EOL;


// 5. Function Returning a Value
function addNumbers($a, $b)
{
    return $a + $b;
}

$result = addNumbers(10, 20);

echo "Addition: " . $result . PHP_EOL;

echo PHP_EOL;


// 6. Calculate Fee
function calculateFee($fee, $discount)
{
    return $fee - $discount;
}

$finalFee = calculateFee(5000, 500);

echo "Final Fee: " . $finalFee . PHP_EOL;

echo PHP_EOL;


// 7. Default Parameter
function calculateDefaultFee($fee, $discount = 0)
{
    return $fee - $discount;
}

echo calculateDefaultFee(5000) . PHP_EOL;
echo calculateDefaultFee(5000, 500) . PHP_EOL;

echo PHP_EOL;


// 8. Admission Fee with Scholarship
function calculateAdmissionFee($fee, $scholarshipPercentage = 10)
{
    $discount = ($fee * $scholarshipPercentage) / 100;

    return $fee - $discount;
}

echo "Admission Fee: " . calculateAdmissionFee(50000) . PHP_EOL;
echo "Admission Fee: " . calculateAdmissionFee(50000, 20) . PHP_EOL;

echo PHP_EOL;


// 9. Admission Fee with Additional Fee
function calculateFinalFee($courseFee, $scholarshipPercentage, $additionalFee)
{
    $discount = ($courseFee * $scholarshipPercentage) / 100;

    $finalFee = $courseFee - $discount + $additionalFee;

    return $finalFee;
}

echo "Final Admission Fee: ";
echo calculateFinalFee(50000, 10, 2000) . PHP_EOL;

echo PHP_EOL;


// 10. Function with Condition
function checkAdmission($age)
{
    if ($age >= 18) {
        return "Eligible";
    }

    return "Not Eligible";
}

echo checkAdmission(25) . PHP_EOL;
echo checkAdmission(16) . PHP_EOL;

echo PHP_EOL;


// 11. Student Result
function checkStudentStatus($marks)
{
    if ($marks >= 40) {
        return "Pass";
    }

    return "Fail";
}

echo checkStudentStatus(75) . PHP_EOL;
echo checkStudentStatus(35) . PHP_EOL;

echo PHP_EOL;


// 12. Function with Type Declarations
function calculateTotal(int $fee, int $additionalFee): int
{
    return $fee + $additionalFee;
}

echo "Total: " . calculateTotal(5000, 1000) . PHP_EOL;

echo PHP_EOL;


// 13. Discounted Fee with Type Declarations
function calculateDiscountedFee(
    int $fee,
    int $discountPercentage
): int {
    $discount = ($fee * $discountPercentage) / 100;

    return $fee - $discount;
}

echo "Discounted Fee: ";
echo calculateDiscountedFee(10000, 20) . PHP_EOL;