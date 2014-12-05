<?php

/**
 * Yet Another Hello World Class
 * This just demonstrates a bunch of OOP concepts
 *
 * @author Andrew Samuels < andrew@ananzze.com
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */

namespace Ananzze\HelloWorld;


class HelloWorld {
    public $greeting = "Hello, World!";

    public static $count = 0;

    public static function plusOne(){
        return "The count is " . ++self::$count . ".\n";
    }

    public function __construct(){
        echo 'The class "', __CLASS__, '" was initiated!' . "\n";
    }

    public function __destruct(){
        echo 'The class "', __CLASS__, '" was destroyed!' . "\n";
    }

    public function sayHello(){
        $hello = "Hello, World!" . "\n";
        return $hello;
    }//sayHello

    public function sayHelloAgain(){
        //return $this->greeting;
        return $this->sayHello();
    }//sayHelloAgain

    public function setGreeting($whatev){
        $this->greeting = $whatev;
    }

    public function __toString(){
        echo "Using the toString() Method: ";
        return $this->getGreeting();
    }

//    protected function getGreeting(){
//        return $this->greeting . "\n";
//    }

    public function getGreeting(){
        return $this->greeting . "\n";
    }
}
?>
