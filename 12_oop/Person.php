<?php 

// File location for the Person class

class Person {
    public string $name;
    public string $surname;
    private ?int $age;
    public static $counter = 0; // Static methods belong to the class, not the instance

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++; // When create instance of class, increase counter;
    }
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }
}

?>