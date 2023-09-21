<?php

  /**
    * ===================================
    *  OOP - object oriented programming
    * ===================================
    * *********** DAY 05 ****************
    * ===================================
    * inheritance
    * association
    * aggregation
    * composition
    * 
  */
    
  class Trainer{
    public $name;
    public $salary;
    public $age;
    public $rate;

    public function isAGoodTrainer(){
      
    }
  }

  class WebdevelopmentTrainer extends Trainer{
    public function isTrainerQualified(){
      // some Operation
    }

    public function addBook(Book $book){

    }
    public function paySalary(){
      if($this->rate === true){
        echo 'You have your salary';
      }
    }
  }

  class Book{
    public $title;
    public $author;
    public $isbn;
    public function canBeBorrowed(){

    }

    public static function isBorrowed(Trainer $trainer){
      return $trainer->name;
    }
  }

  class TrainingProgram{
     public $title;
     public $studentList;
     public $trainer;

     public function showStudent(){
      return $this->studentList;
     }

     public function addStudent(Student $student){
      return $this->studentList[] = $student;
     }

     public function isTrainerGood(Trainer $trainer){
      $trainer->rate = true;
     }
  }
   
  class Student{
    public $name;
    public $age;
    
  }

?>