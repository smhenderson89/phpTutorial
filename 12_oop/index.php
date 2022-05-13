<?php

// What is class and instance?
// require_once "Person.php";
require_once "Person.php";
require_once "Student.php";

$student = new Student("Brad", "Traversy", '1234');
echo '<prev>';
var_dump($student);
echo '</prev>';
// echo 'new file locations hooray it works!'.'<br>';

// $p = new Person("Brad", "Traversy");
// $p->setAge(30);
// echo $p->getAge().'<br>';
// echo json_encode($p).'<br>'; 

// $p2 = new Person('John', 'Smith');
// echo json_encode($p2).'<br>';

// echo Person::$counter; // "::" access static, constant or overriden properties or methods of a class

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter

?>