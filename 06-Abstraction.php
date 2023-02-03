<?php

  /**
    * ===================================
    *  OOP - object oriented programming
    * ===================================
    * *********** DAY 06 ****************
    * ===================================
    * Abstract classes and interfaces
    * 
  */

  abstract class Employee{
    public $Fname;
    public $Lname;
    public $age;
    public $phone;
    public $address;
    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;


    abstract public function showName();

    public function getOvertime(){
      return $this->overtime * $this->overtimeRate;
    }
    public function getAbbsent(){
      return $this->abbsent * $this->abbsentRate;
    }

    public function getSalary(){
      return $this->salary - ($this->salary  * $this->tax);
    }

    abstract public function showTotalSalary();

  }

  class Manager extends Employee{
    public $numberOfAudits;
    public function showName(){
      return ' Hello Manager ' . $this->Fname .' ' .$this->Lname;
    }

    public function showTotalSalary(){
      return $this->getSalary() + $this->getOvertime()  - $this->getAbbsent()+ $this->numberOfAudits * 100;
    }

    public function showAddress(){
      return $this->address;
    }
  }

  class SuperVisor extends Employee{
    public $successfullprojects;
    public function showName(){
      return ' Hello Supervisor ' . $this->Fname .' ' .$this->Lname;
    }
    public function showTotalSalary(){
      return $this->getSalary() + $this->getOvertime()  - $this->getAbbsent()  + $this->successfullprojects * 1000;
    }
  }

  class Worker extends Employee{
    public $bonus = 100;
    public function showName(){
      return ' Hello Worker ' . $this->Fname .' ' .$this->Lname;
    }
    public function showTotalSalary(){
      return $this->getSalary() + $this->getOvertime()  - $this->getAbbsent() + $this->bonus;
    }
  }



// cannot instantiate abstract class 

$mohamed  = new Manager();
$mohamed->tax = 0.1;
$mohamed->salary = 5000;
$mohamed->overtime = 15;
$mohamed->overtimeRate=30;
$mohamed->abbsent = 3;
$mohamed->abbsentRate = 45;
$mohamed->numberOfAudits = 10;

echo $mohamed->showTotalSalary(). ' L.E';
?>