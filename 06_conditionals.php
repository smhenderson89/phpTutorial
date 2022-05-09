<?php

$age = 20;
$salary = 300000;

// Sample if
// if ($age == 20) {
//     echo "1";
// }

// Without circle braces
// if ($age === 20) echo "1";

// Sample if-else
// if ($age > 20) {
//     echo "1";
// } else {
//     echo "2";
// }

// Difference between == and ===
// if ($age == 20) {
//     echo "1".'<br>';
// }

// if ($age == '20') {
//     echo "2".'<br>';
// }

// $age == 20; // true
// $age == '20'; // true

// $age === 20; // true
// $age === '20'; // false

// if AND
// if ($age == 20 && $salary == 300000) {
//     echo 'do something';
// }

// if OR
// if ($age > 20 || $salary == 300000) {
//     echo 'do or something';
// }

// Ternary if
// echo $age < 22 ? 'Young' : 'Old';

// Short ternary
// $myAge = $age ?: 18;
// If age doesn't exist, set age to 18, otherwise display age
// echo $myAge;

// Null coalescing operator
// $myName = isset($name) ? $name : 'John';
// echo $myName;

// Short hand version

// $myName = $name ?? 'JohnShort';
// echo $myName;

// switch
$userRole = 'webadmin';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'editor';
        break;
    default:
        echo 'Invaid role';
}

?>