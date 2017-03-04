<?php

include('person9.php');
echo '<br />';

class Employee extends Person9 {
	public $id = 1234;
	public function __construct($name,$age,$id){
		parent::__construct($name,$age);
		//$name and $age above are inherited from the parent person9.php
		$this->id=$id;
	}

	public function printDetails() {
		echo $this->name. " , ". $this->age. " (".$this->id.")";	
	}

}

//instantiate an object from the Employee class
$p2 = new Employee("David",25,7865);

//call method on the instantiated object from the class
$p2->printDetails();


?>