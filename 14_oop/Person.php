<?php
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
}
