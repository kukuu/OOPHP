
<html>
<head>
	<title>Extending Inheritance</title>
	<style>
		.sq-jaws {
			color:#ff0000;
			font-weight:bold;
			font-size:2em;
		}
	
	</style>
</head>
<body>
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
		//return "Hey ".$this -> name." <br />";
		return $this -> name." <br />";
	}
}//End of Employee class

//1 Now define an Executive class that inherits   from Employee

class Executive extends Employee {
	//Define a custom method unique to Employee
	function pillageCompany () {
		echo "I am selling  company assets to finance my yatch.";
	}

}//End Executive class

//Create a new executive object

$exec = new Executive();

//Call the setName() method defined in the Employee class which is inherited in Executive
$exec -> setName("I was born on Monday.So Kojo is my name");

//Call the Employee getName() method
echo $exec -> getName();



//2. Extending Executive: class CEO extends Executive
class CEO extends Executive {

//Define a custom method unique to CEO
	function getFaceLift() {
		echo " <br /> I need some <span class='sq-jaws'>square</span> jaws";
	}
}

//Now create a CEO object
$ceo = new CEO();
//inherit setName method from Empployee
$ceo  -> setName("I was baptised Alexander");
echo $ceo -> getName();
//Now call the custom pillageCompany method from Executive
$ceo  -> pillageCompany();
//Finaly associate with its custom method getFaceLift
$ceo  ->getFaceLift();
?>
</body>
</html>