<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];


// Print the whole array
/* 
echo '<pre>'; // pre = preformatted text: https://www.w3schools.com/tags/tag_pre.asp
var_dump($fruits);
echo '</pre>';
*/

// Get element by index
// echo $fruits[1].'<br>';

// Set element by index
/*
$fruits[0] = 'Peach';
echo '<prev>';
var_dump($fruits);
echo '</prev>'.'<br>'; // Prev -> html way to display full version of an array

print_r($fruits).'<br>'; // Pretty version of printing an array
echo json_encode($fruits); // Most easily readable version of an array
*/

// Check if array has element at index 2
// echo isset($fruits[2]).'<br>'; // true

// Append element
// $fruits[] = 'Banana'; // way to append an element to an array
// echo json_encode($fruits).'<br>';

// Print the length of the array
// echo count($fruits).'<br>';

// Add element at the end of the array
//array_push($fruits, 'foo');
// echo json_encode($fruits);

// Remove element from the end of the array
/* $popped = array_pop($fruits);
echo "Popped array is $popped".'<br>';
echo json_encode($fruits).'<br>';
*/

// Add element at the beginning of the array
/*
array_unshift($fruits, 'bar');
echo json_encode($fruits).'<br>';
*/

// Remove element from the beginning of the array
/*
array_shift($fruits);
echo json_encode($fruits).'<br>';
*/

// Split the string into an array
/* 
$string = "Bannna,Apple,Peach";
$newArray = explode(",", $string);
echo json_encode($newArray);
*/

// Combine array elements into string
// echo implode("&", $fruits);

// Check if element exist in the array
/* 
var_dump (in_array('Apple', $fruits));
echo '<br>';
var_dump (in_array('Mango', $fruits));
*/

// Search element index in the array
// var_dump(array_search('Apple', $fruits));

// Merge two arrays
/*
$vegetabes = ["Potato", "cucumber"];
$merged = array_merge($fruits, $vegetabes);
echo json_encode($merged);
*/

// Sorting of array (Reverse order also)
/* 
sort($fruits); // sorts aphabetical
echo "Sort".json_encode($fruits).'<br>';
rsort($fruits);
echo "ReverseSort".json_encode($fruits).'<br>';
*/

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================



// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays