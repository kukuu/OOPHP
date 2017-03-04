<?php 
include ('employee.php');

class Executive extends Employee {

	/*
	* Define a method unique to Executive
	*/
	public function pillageCompany()
	{
		echo "I am selling the company assets to finance my yatch";
	}
}

// Create a new executive object Through instantiation
$exec = new Executive();
// Calling setter method
$exec->setName("Alexander");
// publishing the name by calling the getter method
echo $exec->getName();
// Now call the pillageCompany method for association
$exec->pillageCompany();

?>