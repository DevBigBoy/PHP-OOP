<?php
/**
 * ===============================
 *    Magic Methods - Part 2
 * ===============================
 ** __sleep
 ** __wakeup
 ** __toString
 ** __invoke
 ** __set_state
 ** __clone
 ** __debugInfo
*/

class Database {
    public $link;
    public $dsn;
    public $queryCache;
    public $user_name;
    public $pass;


    public function __construct($dsn, $user_name, $pass)
    {   $this->user_name = $user_name;
        $this->pass=$pass;
        $this->dsn= $dsn;
        $this->link = new PDO($dsn, $user_name, $pass);
    }

   // TODO:: This method is used for serialization. Serialization is used to save or store the information of the object in the form of string representation in a database, cookies, servers, sessions, files, etc.
   
    public function __sleep()
    {
        return array('dsn', 'user_name','queryCache' ,'pass');
    }

    public function __wakeup()
    {
        $this->link = new PDO($this->dsn, $this->user_name, $this->pass);

    }
}

$obj = new Database('mysql:host=localhost;dbname=project', 'root','');

$se =  serialize($obj); // error
var_dump(unserialize($se));