<?php

   /**
     * ===================================
     *  OOP - object oriented programming
     * ===================================
     * *********** DAY04 *****************
     * ===================================
     * Constants
     * ?  you can define constants or values that are not intended to change.
     * Self keyword
     * Static  keyword
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
      private static $teacher = 'mohamed elshazly';
      protected $minScore = 100;
      protected $maxScore = 200;
      // create constants
      const MIN_AGE = 20;
      const MAX_AGE = 30;

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
      protected function setAge($age){
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        // self vs static
        if ($age < static::MIN_AGE || $age > static::MAX_AGE) {
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

      public static function showTeacherName(){
        return static::$teacher;
      }
}

// inhertance
class Grade1Student extends Student{
  private $activity = '';
  const MIN_AGE = 10;
  const MAX_AGE = 20;
  private static $teacher = 'Ibrahim elshazly';
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

$yassmin = new Grade1Student('Yasmin azz', 15);
// echo $yassmin::$teacher;
// calling from inherited class
// echo Grade1Student::MIN_AGE;
echo Grade1Student::showTeacherName();
// echo $yassmin->showTeacherName();
// Class Constant can be called like this ::
// echo'<p> Minimum age is '. Grade1Student::MIN_AGE .'</p>';
// echo'<p> Maximum age is '. Grade1Student::MAX_AGE .'</p>';


?>