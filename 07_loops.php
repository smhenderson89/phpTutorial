<?php

// while
// while (true) {

// }

// Loop with $counter
// $counter = 0;
// while ($counter < 10) {
//     echo $counter.'<br>';
//     if ($counter === 5) {
//         break;
//     }
//     $counter++;
// }

// do - while
// $counter = 0;
// do {
//     echo $counter.'<br>';
//     $counter++;
// } while ($counter < 3);

// for
// for ($i = 0; $i < 10; $i++) {
//     echo $i.'<br>';
// }

// foreach
$fruits = ["Banana", "Apple", "Orange"];
// foreach ($fruits as $i => $fruits) {
//     echo $i.' '.$fruits.'<br>';
// }

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis','Video Games']
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' ' . implode(",", $value).'<br>'; // implode with allow to print sub array from associative array
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}

?>