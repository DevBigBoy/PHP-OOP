<?php
    /**
     * ===================================
     *  OOP - object oriented programming
     * ===================================
     * Day01
     * 
     * Class
     * Object
     * attributes
     * methods
     * 
   */

   class Employee{
      public $name;
      public $age;
      public $address;
      public $salary;
      public $tax;
      public $overtime;
      public $overtimeRate;
      public $absent;
      public $absentRate;


      public function calculateOverTime(){
         return $this->overtime * $this->overtimeRate;
      }
   
      public function calculateAbsent(){
         return $this->absent * $this->absentRate;
      }
      
      public function calculateNetSalary(){
         return $this->salary - ($this->salary * $this->tax);
      }
   }

   $ahmed = new Employee();
   $ahmed->name ='ahmed elshazly';
   $ahmed->salary = 2500;
   $ahmed->age = 31;
   $ahmed->address = 'Egypt, Mansoura';
   $ahmed->tax = 0.03;
   $ahmed->overtime  =20;
   $ahmed->overtimeRate = 15; 
   $ahmed->absent = 1;
   $ahmed->absentRate =75;

   

   // echo "<pre>";
   // var_dump($ahmed);
   // echo "</pre>";
   // echo is_a($ali, 'Employee');

   echo "<p>ahmed overtime is ".$ahmed->calculateOverTime()." L.E</p>" ;
   echo "<p>ahmed absent is ".$ahmed->calculateAbsent()." L.E</p>";
   echo "<p>ahmed total salary is ".$ahmed->calculateNetSalary()." L.E</p>";

   $ali = new Employee();
   $ali->name ='ali elshazly';
   $ali->age = 31;
   $ali->address = 'alexandria, Egypt';
   $ali->salary = 5000;
   $ali->tax = 0.03;
   $ali->overtime  = 40;
   $ali->overtimeRate = 15; 
   $ali->absent = 2;
   $ali->absentRate =75;

   echo "<p>ali overtime is ".$ali->calculateOverTime()." L.E</p>" ;
   echo "<p> ali abset is ".$ali->calculateAbsent()." L.E</p>" ;
   echo "<p>ali total salary is ".$ali->calculateNetSalary()." L.E</p>";

?>