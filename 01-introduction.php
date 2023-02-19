<?php

/**
 * 
 * OOP - Object Oriented Programing
 * Class, Object
 * 
 * Class represent a template consists of properties (attributes) and methods (functions)
 * object is an instance of a typical class
 * By default the attribute's value is NULL
 * 
 */


class Employee
{
    public $id;
    public $name;
    public $age;
    public $address;
    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;

    public function calculateOvertime()
    {
        return $this->overtime * $this->overtimeRate;
    }

    public function calculateAbbsent()
    {
        return $this->abbsent * $this->abbsentRate;
    }

    public function calculateTax()
    {
        return $this->salary * $this->tax;
    }

    public function salaryAfterTax()
    {
        return $this->salary - $this->calculateTax();
    }

    public function calculateTotalSalary()
    {
        return ($this->salaryAfterTax() + $this->calculateOvertime()) + $this->calculateAbbsent();
    }
}

$user = new Employee();
$user->name = 'Ahmed';
$user->age = 22;
$user->address = 'Mansoura';
$user->salary = 5000;
$user->tax = 0.2;
$user->overtime = 25;
$user->overtimeRate = 20;
$user->abbsent = 5;
$user->abbsentRate = 30;

$user_1 = new Employee();
$user_1->name = 'Ezz';
$user_1->age = 22;
$user_1->address = 'cairo';
$user_1->salary = 5000;
$user_1->tax = 0.2;
$user_1->overtime = 10;
$user_1->overtimeRate = 20;
$user_1->abbsent = 5;
$user_1->abbsentRate = 30;

// TODO :: old Fashion
// function calculateOvertime($overtime, $overtimeRate)
// {
//     return $overtime * $overtimeRate;
// }

// function calculateAbbsent($abbsent, $abbsentRate)
// {
//     return $abbsent * $abbsentRate;
// }
// $userCalculateOvertime = calculateOvertime($user->overtime, $user->overtimeRate);

// TODO :: With OOP
// $userCalculateOvertime = $user->calculateOvertime();

echo "<h2>$user->name has overtime of " . $user->calculateOvertime() . " L.E</h2>";
echo "<h2>$user->name has abbsent of " . $user->calculateAbbsent() . " L.E</h2>";
echo "<h2>$user->name has total salary of " . $user->calculateTotalSalary() . " L.E</h2>";
// echo "<h2>$user_1->name has overtime " . $user_1->calculateOvertime() . "</h2>";
// var_dump($user);

class Car
{
    public $id;
    public $make;   # TESLA
    public $model;  # Model s
    public $year;   # 2024
    public $color;  # red
}

$car = new Car;
$car->make = 'BMW';
$car->model = 'X6';
$car->year = '2024';
// var_dump($car);