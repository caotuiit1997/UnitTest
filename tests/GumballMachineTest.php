<?php
 require '../GumballMachine.php';

 class GumballMachineTest extends PHPUnit_Framework_TestCase
 {
     public $gumballMachineInstance;

     public function setUp(){
         $this->gumballMachineInstance = new Gumballmachine();
     }

     public function TestIfWheelWorks(){
         $this->gumballMachineInstance->setGumballs(100);

         $this->gumballMachineInstance->turnWheel();

         $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
     }
 }