<?php

/**
 * 
 * OOP - Object Oriented Programing
 * Constructors, Destructors
 * 
 * Access Modifieres
 *      Public
 *      private
 *      protected
 * 
 */

class Student
{
   private $id;
   private $firstName;
   private $lastName;
   private $DOB;
   private $gender;
   private $city;
   private $street;


   public function __construct($firstName, $lastName, $gender, $city)
   {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->gender = $gender;
      $this->city = $city;
   }

   public function getFirstName()
   {
      return $this->firstName;
   }

   public function getLastName()
   {
      return $this->lastName;
   }

   public function getGender()
   {
      return $this->gender;
   }

   public function getCity()
   {
      return $this->city;
   }
}

$std = new Student('mohamed', 'ezz', 'male', 'menofia');
// var_dump($std);