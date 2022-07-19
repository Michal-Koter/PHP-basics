<?php
include_once "Student.php";

$student1 = new Student("Marek");
print_r($student1);
$student2 = Student::withId("Adam", 1234);
print_r($student2);
$student3 = Student::withLastName("Jan", "Kowalski");
print_r($student3);