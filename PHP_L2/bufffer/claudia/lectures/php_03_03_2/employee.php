<?php
/*
* Define a base Employee class
*/
class Employee {

	private $name;
	
	/*
	* Define a setter for the private $name member
	*/
	public function setName($name)
	{
		if ($name == "") {
			echo "Name can not be blank!";
		} else {
			$this->name = $name;
		}
	}
	
	/*
	* Define a getter for the private $name member to return the value
	*/
	public function getName()
	{
		return "My name is " . $this->name . "<br/>"; 
	}	
}
?>
