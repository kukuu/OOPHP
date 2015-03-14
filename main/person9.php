<?php
//Author: Alexander Adu-Sarkodie
// June 2010

class Person9 {

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

//instantiate an object from the person class

$p1 = new Person9('John',44);

//call the method on the instantiated object from the class
$p1->sayHello();

?>