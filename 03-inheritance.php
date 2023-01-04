<?php

/**
 * 
 * OOP - Object Oriented Programing
 * 
 * inheritance
 * 
 */

class Student
{
  private $name;
  private $age;
  private $phone;
  private $score;
  private $subjects = array(
    'arabic'  => 0,
    'english' => 0,
    'math'    => 0,
    'science' => 0
  );
  private $minScore = 100;
  private $maxScore = 200;

  // constructor
  public function __construct($name, $age, $phone)
  {
    $this->setName($name);
    $this->setAge($age);
    $this->setPhone($phone);
    // echo 'Iam a Student\'s constructor ';
    return $this;
  }

  private function setName($name)
  {
    $this->name = ucwords(strtolower($name));
  }

  public function getName()
  {
    return $this->name;
  }

  private function setAge($age)
  {
    $this->age = abs($age);
  }

  public function getAge()
  {
    return $this->age;
  }

  private function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }
}

// $s = new Student('ali', 20, '01025369885');
// echo $s->getName();
// echo $s->getAge();
// echo $s->getPhone();


class Graduate extends Student
{
  protected $year;
  protected $degree;

  public function __construct($year, $degree, $name, $age, $phone)
  {
    parent::__construct($name, $age, $phone);
    // echo 'Iam a Graduate\'s constructor ';
    $this->minScore = 125;
    $this->maxScore = 250;
    $this->subjects['computer'] = 0;
    $this->year = $year;
    $this->degree = $degree;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function getDegree()
  {
    return $this->degree;
  }
}

$g = new Graduate('2024', 'good', 'ali', 20, '01025369885');
echo $g->getName();

// var_dump($g);