<?php
// Magic constants
// echo __DIR__.'<br>'; // prints the directory the program is running from
// echo __FILE__.'<br>'; // prints the file the program is running from

// echo __LINE__.'<br>'; // prints the line the variable is used

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
// $files = scandir('./');
// echo json_encode($files).'<br>';

// // file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
// file_put_contents('sample.txt', 'Some Content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson;

$users = json_decode($usersJson, true);
echo $users;

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
?>