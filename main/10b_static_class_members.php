<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>John's page</title>
</head>

<body>

<?php

include('person9.php');
echo '<br />';

class Employee extends Person9 {
	public static $counter;
	public $id = 1234;
	public function __construct($name,$age,$id){
		self::$counter++;//incremental counter
		parent::__construct($name,$age);//inherited from person9.php
		$this->id=$id;
		//inherits $this->name=$name; $this->age=$age; from Class Person 9
	}

	public function printDetails() {
		echo  $this->name . " , age ". $this->age. " (id: ".$this->id.")". " you are number " .self::$counter. "". " to visit this site <br />";	
	}

}

//instantiate an employee objects and call methods on the object from the class



$p3 = new Employee("John",47,45687);
$p3->printDetails();


//call the counter on the class that instantiate the object classname::$counter
echo "<br />Total number of visitors  : ". Employee::$counter++


?>



</body>
</html>
