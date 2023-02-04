<?php

/**
 * ===============================
 *    Magic Methods - Part 1
 * ===============================
 * 
 ** __set
 * TODO:: runs when writing data to inaccessible property
 ** __get
 * TODO:: runs when a call is made to inaccessible property
 ** __isset
 * TODO:: triggered when calling isset or empty on inaccessible property
 ** __unset
 * TODO:: triggered when invoking unset on inaccessible property     
 ** __call
 * TODO:: triggered when invoking inaccessible method in an object context   
 ** __callStatic
 * TODO:: triggered when invoking inaccessible method in a static context
*/

class Student {


  private $data = [];
  private $name;
  

  public function __set($name, $value){
    $this->data[$name] = $value;
    
  }
// this function was called when ask about the age so the $key is $age
  public function __get($key)
  {
    // age
    // TODO:: calling __isset function and passing to it $age

    //if isset($this->$key) => true  
    if (isset($this->$key)) {
      return $this->data[$key];
    } else {
        //if isset($this->$key) => false
        trigger_error('sorry no key '.$key.' Found in the data array', E_USER_ERROR);
      }
  }

  public function __isset($name){
    //TODO:: it will check that $age exist in $data[]
    if (array_key_exists($name, $this->data)) {
      echo 'the property '. $name.' is found and is being extracted ';
      //TODO:: trigger the above if
      return true;
    } else{
      return False;
      // echo 'the property '. $name.' not found';
    }

    // if (property_exists($this, $name)) {
    //   echo 'the property is found';
    // } else {
      
    // }
    // echo 'the property '.$name.' will be checked';
  }

  public function __unset($name)
  {
    if(isset($this->$name)){
      unset($this->data[$name]);
    }
  }

  public function __call($name, $arguments)
  {
    if (method_exists($this, $name)) {
      $this->$name($arguments);
    } else {
      trigger_error('function '.$name. ' is not found', E_USER_ERROR);
    }
  }
  public static function __callStatic($name, $arguments)
  {
    echo 'A call to a static method '.$name .' occured';
  }

  private function sayWelcome(){
    echo 'hello user';
  }
  
}

$ali = new Student();
$ali->name = 'ali';
$ali->age = 16;
$ali->city = 'mansoura';


// echo $ali->age;

// unset($ali->age);
// echo $ali->age;
// echo $ali->test;

// $ali->sayWelcome();
Student::sayHello();

?>