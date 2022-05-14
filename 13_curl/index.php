<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

// $resource = curl_init($url);
//  Resource is used in API calls

// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);
// $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// echo $result;

// Get response status code
// echo json_encode($code);

// set_opt_array

// Post request

$resource = curl_init();

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
echo ($result);

?>