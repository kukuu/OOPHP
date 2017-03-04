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
?>
