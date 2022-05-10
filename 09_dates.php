<?php

// Print current date
echo date('Y-m-d H:m:s').'<br>';

// // Print yesterday
// echo date('Y-m-d H:i:s', time() - 60 * 60 * 24); 

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s').'<br>';

// Print current timestamp
echo time().'<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:00');
echo json_encode($parsedDate);

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';
$parsedDate2 = date_parse_from_format('F j Y, H:m:s', $dateString);
echo json_encode($parsedDate2);

?>