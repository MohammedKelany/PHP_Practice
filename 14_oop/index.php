<?php
// include_once './Person.php';
// include_once './Student.php';
// What is class and instance
// Create Person class in Person.php
class Person
{
    private $name;
    private $age;
    private $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function setName($name)
    {
        $this->name = $name;
        # code...
    }
    public function setAge($age)
    {
        $this->age = $age;
        # code...
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
        # code...
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function __destruct()
    {
    }
    public function __toString()
    {
    }
    public function __get($name)
    {
    }
    public function __set($name, $value)
    {
    }
    public function __serialize(): array
    {
        return [];
    }
    public function __unserialize(array $data): void
    {
    }
    public function __autoload()
    {
    }
    public function __clone()
    {
    }
    public function __call($name, $arguments)
    {
    }
    public function __invoke()
    {
    }
    public function __unset($name)
    {
    }
    public function __wakeup()
    {
    }
    public function __sleep()
    {
    }
    public static function __set_state($properties)
    {
    }
}


// Create instance of Person
// $person = new Person('mohamemd', 12, 14);
// $person->setName("Mohammed Fathi Ali Mohammed");
// $person->setAge(50);
// $person->setSalary(1200);
// echo $person->getName() . "<br>";
// echo $person->getAge() . "<br>";
// echo $person->getSalary() . "<br>";
// // Using setter and getter
// $student = new Student("Ahmed Mohammed Ahmed", 12, 500000, 12012309);
// echo $student->getName() . "<br>";
// echo $student->getAge() . "<br>";
// echo $student->getSalary() . "<br>";
// echo $student->getStudentId() . "<br>";