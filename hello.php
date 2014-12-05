<?php
/**
 * Created by PhpStorm.
 * User: Ananzze
 * Date: 11/30/2014
 * Time: 1:33 PM
 */
namespace Ananzze\HelloWorld;

require_once('C:\Users\Ananzze\PhpstormProjects\HelloWorld\src\HelloWorld.php');

 $hi = new HelloWorld();
 $sup = new HelloWorld();
 echo $sup;
 //echo $hi->sayHello();
 //var_dump($hi);
 //echo $hi->sayHelloAgain();
 //echo $hi->greeting;
 echo $hi->getGreeting();
 echo $sup->getGreeting();

 $hi->setGreeting("All the cool kids are doing it.");
 $sup->setGreeting("Lost like tears in rain...");

 echo $hi->getGreeting();
 echo $sup->getGreeting();
 unset($hi);
 unset($sup);
 
 ?>
