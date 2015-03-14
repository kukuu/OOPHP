<?php
//Author: Alexander Adu-Sarkodie

class Person15 {

	public $name = "a name";
	public $age = 0;  
	public function __construct($name,$age) {
		$this->name= $name;
		$this->age = $age;	
	}

	
	public function sayHello() {
		echo 'Hello '. $this->name;
	}
	 
}

//instantiate an object from the Person15 class and pass an instance
$p1 = new Person15('John',44);

//call method on the instantiated object from the class
$p1->sayHello();

?>