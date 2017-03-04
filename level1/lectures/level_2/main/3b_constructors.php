<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Using Constructors</title>
	<style>
		.outstanding-c {
			color:#ff0000;
			font-weight:bold;
		}
	</style>
</head>

<body>


<?php

	class Customer {
		private $first_name;
		private $last_name;
		private $outstanding_amount;
		
		
		//Once object is created it checks for the existence of the constructor function
		//the object then inherits all the properties of the constructor.
		//its method and argument (properties)
		public function __construct($first_name, $last_name, $outstanding_amount) {
			$this->setData($first_name, $last_name, $outstanding_amount);
			$this->printData();
		}
		
		//an interface (public function) provides access to the private properties
		//using method from the constructor
		
		public function setData($first_name, $last_name, $outstanding_amount) {
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->outstanding_amount = $outstanding_amount;
		}
		
		// an interface (public function) to pass data to the private properties and print.
		public function printData(){
			echo "Customer " . $this->first_name . " " . $this->last_name;	
			echo " owes outstanding amount: £"."<span class='outstanding-c'>". $this->outstanding_amount."</span>";
			
		}
	
	}

	$c1= new Customer("Alex","Morgan",0);
	


?>


</body>
</html>
