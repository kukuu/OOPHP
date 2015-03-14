
<?php 
//Author: Alexander Adu-Sarkodie
//Define a base Employee class
class Employee {
	private $name;
	
	//Define a setter for the private $name member.
	function setName($name){
		if ($name == "") {
			echo "Name cannot be blank!";
		}
		else {
			$this -> name =  $name;
		}
	}
	//Define a getter for the the private $name member to return the value
	function getName() {
		return "My name is ".$this -> name." <br />";
	}
}//End of Employee class

//Now define an Executive class that inherits   from Employee

class Executive extends Employee {
	//Define a method unique to Executive
	function pillageCompany() {
		echo "I am selling the  company assets to finance my yatch";
	}

}//End Executive class

//Create a new executive object.Through instantiation. 

$exec = new Executive();

//Call the setName() method defined in the Employee class
$exec -> setName("Alexander");

//Call the Employee getName() method
echo $exec -> getName();

//After using all the inheritance properties and methods from its ancestors next
//it calls the method from the class where it was initially instntiated

//Now call the pillageCompany methid for associiation
$exec -> pillageCompany();

?>