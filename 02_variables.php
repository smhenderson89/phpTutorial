<?php

// What is a variable

// Variable types
/* 
    String
    Interger
    Float/Double
    Boolean
    Null
    Array
    Object
    Resource
*/


// Declare variables
$name = 'Zura';
$age = 28;
$isMale = true;
$isFemale = false;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>'; // TRUE/FALSE convert into a number
echo $isFemale.'<br>'; // FALSE is not printed??
echo $height.'<br>';
echo $salary.'<br>'; // NULL is not printed


// Print types of the variables
/* 
echo $name.'-'.gettype($name).'<br>';
echo $age.'-'.gettype($age).'<br>';
echo $isMale.'-'.gettype($isMale).'<br>';
echo $height.'-'.gettype($height).'<br>';
echo $salary.'-'.gettype($salary).'<br><br>';
*/

// Print the whole variable
/* 
echo "Pritning whole variable"."<br>";
var_dump($name, $age, $isMale, $salary);
*/

// Change the value of the variable
// $name = false;

// Print type of the variable
// echo gettype($name).'<br>';

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // ture

// Check if variable is defined
isset($name); // Check if variabe is declared -> true
isset($address); // false (Not declared)

// Constants
define('PI', 3.14);

// Using PHP built-in constants
echo PI.'<br>';
echo SORT_ASC.'<br>'; // Sort ascending
echo PHP_INT_MAX.'<br>'; 

?>