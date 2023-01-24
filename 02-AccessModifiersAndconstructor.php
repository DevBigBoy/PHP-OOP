<?php

   /**
     * ===================================
     *  OOP - object oriented programming
     * ===================================
     * *********** DAY02 *****************
     * ===================================
     * Constructor
     * Destructors
     * Access Modifiers => visibility
     * Public
     * private
     * protected -> inheritance
     * setters 
     * getters
   */
    
   // Class
   class Student{
      private $name;
      public $age;
      private $level;
      public $phone;
      public $score;
      public $subjects = array(
         'Arabic' => 0,
         'English' => 0,
         'Math' => 0,
         'science' => 0
      );
      public $minScore = 200;
      public $maxScore = 400;

      // constructor

      public function __construct($name, $age){
         $this->name = $name;
         if($age >= 18){
            $this->age = $age;
         } else{
            throw new Exception('Sorry the student\'s age must be greater than 18');
         }


         $this->welcome();
         // $this->enterphone();
      }

      public function welcome(){
         echo "<h2>welcome to our school {$this->name}</h2>";
      }

      private function enterphone(){
         echo "<p>please {$this->name} don't forget to set your phone number</p>";
      }

      public function setLevel($level){
         // make sure that this is an integer
        $level = abs(filter_var($level,FILTER_SANITIZE_NUMBER_INT));

        if ($level < 1 || $level > 12) {
         throw new Exception('sorry levelmust be between 1 and 12');
        } else {
         $this->level = $level;
        }
      }

      public function getLevel(){
         return $this->level;
      }

      public function setName($name){
         $this->name  = $this->filterName($name);
      }

      private function filterName($name){
         return ucwords(substr($name,0,12));
      }

   }

   // Object
   // instantiation
   $mohamed = new Student('mohamed ali', 35);
   $mohamed->setLevel(-10);
   // echo $mohamed->getLevel();
   // $mohamed->enterphone();
   $ahmed = new Student('ahmed fouad',18);
 
  


?>