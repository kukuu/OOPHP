<?php
	Class Customer {
		private $first_name;
		private $last_name;
		private $outstanding_amount;
	 
		public function __construct() {
			$first_name = "";
			$last_name = "";
			$outstanding_amount = 0;
		}
	 
		public function setData($first_name, $last_name, $outstanding_amount) {
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->outstanding_amount = $outstanding_amount;
		}
		public function getData() {
			echo "Name : " . $first_name . " " . $this->last_name . "\n";
			echo "Outstanding Amount : " . $this->outstanding_amount . "\n";
		}
	 
	}
	$c1 = new Customer();
	$c1->setData("Sunil","Bhatia",0);
?>