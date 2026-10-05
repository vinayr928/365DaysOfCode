<?php

$name = "Vinay";
$age = 25;
$salary = 310000.50;
$isWorking = true;

var_dump($isWorking);
echo "Name: " . $name . PHP_EOL;
echo "Age: " . $age . PHP_EOL;
echo "Salary: " . $salary . PHP_EOL;
echo "Working: " . $isWorking . PHP_EOL;

if ($isWorking) {
    echo "Vinay is currently working." . PHP_EOL;
} else {
    echo "Vinay is currently not working." . PHP_EOL;
}