<?php
    /**
     * ===================================
     *  OOP - object oriented programming
     * ===================================
     * Chapter 6 - part 1
     * 
     * Key OOP Concepts:
     ** Classes 
     ** Object
     ** properties
     ** Methods
     * property scope:
     * public
     * private
     * protected
     * property overloading
     * 
   */

  /**
   * Classes are Entities like: people, food, plants. and each entity is defined by a particular set of characteristics and behaviors
   * in real-life we have characteristics and behviors
   * better known in OOP as properties and methods
   */

   class Book{
      
      // Property declarations defined here
      // Method declarations defined here


   }

   // TODO => depicts a class representing a library employee

   class Employee{

      // Declaring properties
      /**
       * properties don't even necessarily need to be declared
       * they can simply be created and assigned simultaneously by a class object
       * Optionally, you can assign them initial values 
      */
      private $name = '';
      public $title;
      private $age;
      public $address;
      public $salary;
      public $tax;
      private $overtime;
      private $overtimeRate;
      private $absent;
      private $absentRate;

      public function setName($name){
         $this->name = $name;
      }

      public function getName(){
         return $this->name;
      }

      public function satHello(){
         echo "hi, my name is {$this->getName()} .";
      }
   }

   // instantiated object
   $ali = new Employee;
   $ali->setName('ali');

   // invoking properties
   $ali->title = 'worker';
   $ali->salary='2000 $';

   echo "New employee: {$ali->getName()}";

   

   

?>