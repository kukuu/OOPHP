<?php
class Person15 {
	public $name = "a name";
	public $age = 0;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function sayHello()
	{
		echo "Hello " . $this->name . "<br/>";
	}
}

$p1 = new Person15('John', 44);
$p1->sayHello();