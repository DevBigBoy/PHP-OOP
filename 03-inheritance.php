<?php

   /**
     * ===================================
     *  OOP - object oriented programming
     * ===================================
     * *********** DAY03 *****************
     * ===================================
     * Inheritance
   */
    
   // Class
   class Student{
      protected $name;
      protected $age;
      protected $phone;
      protected $score;
      protected $subjects = array(
         'arabic'  => 0,
         'english' => 0,
         'math'    => 0,
         'science' => 0
      );
      protected $minScore = 100;
      protected $maxScore = 200;

      // constructor
      public function __construct($name, $age){
         $this->setName($name);
         $this->setAge($age);
      }

      private function setName($name){
        $name = strtolower($name);
        $name = ucwords($name);
        $this->name = $name;
      }
    
      public function getName(){
        return $this->name;
      }
      private function setAge($age){
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if ($age < 20 || $age > 30) {
            throw new Exception('Sorry age must be between 20 and 30');
        } else{
            $this->age = $age;
        }
      }
      public function getAge(){
        return $this->age;
      }
      
      public function getSubjects(){
        return $this->subjects;
      }
    
      public function getminScore(){
        return $this->minScore;
      }

      public function getMaxScore(){
        return $this->maxScore;
      }

      public function setSubjectScore($subjectName, $value){
        if(array_key_exists($subjectName, $this->subjects)){
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            $value =abs($value);
            if ($value > 50) {
                throw new Exception('Sorry The maximum score for this subject is 50');
            } else{
                $this->subjects[$subjectName] = $value;
            }
        } else{
            throw new Exception("Sorry This {$subjectName} not exist!");
        }
      } 

      public function getSubjectScore($subjectName){
        if(array_key_exists($subjectName, $this->subjects)){
            return $this->subjects[$subjectName];
        } else{
            throw new Exception("Sorry This {$subjectName} not exist!");
        }
      }
}

// inhertance
class Grade1Student extends Student{
    private $activity = '';
    public function __construct($name, $age){
        parent::__construct($name, $age);
        $this->minScore = 125;
        $this->maxScore = 250;
        $this->subjects['computer'] = 0;
    }

    public function setStudentAsActive(){
        $this->activity = 'Active';
    }
    public function setStudentAsNoneActive(){
        $this->activity = 'Not Active';
    }
}

$ali = new Grade1Student('ali gad', 21);
$ali->setSubjectScore('arabic', 25);
echo $ali->getSubjectScore('arabic');
// echo"<pre>";
// print_r($ali->getSubjects());
// echo "</pre>";
?>