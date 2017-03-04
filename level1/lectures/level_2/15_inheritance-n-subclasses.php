<?php

include('person15.php');
echo '<br />';

class Employee extends Person15 {
	public $id = 1234;
	public function __construct($name,$age,$id){
		parent::__construct($name,$age);
		
		
		;
	}

	public function printDetails() {
		echo $this->name. " , ". $this->age. " (".$this->id.")";	
	}

}


$p2 = new Employee("David",25,7865);
$p2->printDetails();


?>