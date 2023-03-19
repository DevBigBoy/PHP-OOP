<?php

/**
 * 
 * namespaces
 * 
 * Affected types by namespaces are traits, classes, interfaces, functions, constants
 */

namespace Main\Utilities;

include "exists.php";

class A
{
    public function __construct()
    {
        echo 'I am an instance of Class A inside the namespace Main';
        echo '<br>';
    }
}
class DateTime
{
    public function __construct()
    {
        echo 'hello From DateTime Class<br>';
    }
}

function substr()
{
}

function sayWelcome()
{
    echo 'hello my dear friends. <br>';
}

$time = new DateTime();

$oject = new \Main\Utilities\A; # Main\A()
$oject = new A; # A()
sayWelcome();
\Main\Utilities\sayWelcome();

$b = new Actions\A;
Actions\sayWelcome();
\Main\Utilities\Actions\sayWelcome();