<?php

include ('person15.php');

class Employee extends Person15 {
	public static $counter;
	public $id = 1234;
	
	public function __construct($name, $age, $id)
	{
		// increasing the counter
		self::$counter++;
		//parent::__construct($name, $age);
		$this->name = $name;
		$this->age = $age;
		$this->id = $id;
	}
	
	public function printDetails()
	{
		echo $this->name." , ".$this->age." (".$this->id.")<br/>";
	}
}

$p2 = new Employee("David", 25, 7865);
$p2->printDetails();

$p3 = new Employee("John", 47, 45687);
$p3->printDetails();

$p4 = new Employee("John4", 44, 45688);
$p4->printDetails();

echo "Total created: ". Employee::$counter;


