<?php

class Student
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function withId(string $name, int $id)
    {
        $tempStudent = new Student($name);
        $tempStudent->id = $id;
        return $tempStudent;
    }

    public static function withLastName(string $name,string $lastName)
    {
        $tempStudent = new Student($name);
        $tempStudent->lastName = $lastName;
        return $tempStudent;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName($name) : void
    {
        $this->name = $name;
    }
}