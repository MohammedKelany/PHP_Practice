<?php
include_once 'Person.php';

class Student extends Person
{
    private $stuId;
    public function __construct($name, $age, $salary, $stuId)
    {
        parent::__construct($name, $age, $salary);
        $this->stuId = $stuId;
    }
    public function setStudentId($stuId)
    {
        $this->stuId = $stuId;
        # code...
    }
    public function getStudentId()
    {
        return $this->stuId;
        # code...
    }
}
