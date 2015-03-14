<?php 		
	class person {		
	var $name;		
		public $height;		//Properties declared as 'public' have no access restrictions, meaning anyone can access them.
		protected $social_insurance;//When a property is declared 'protected', only the same class and classes derived from that class can access the property - this has to do with inheritance. 
		private $pinn_number;//When you declare a property as 'private', only the same class can access the property. 
		
		function __construct($persons_name) {		
			$this->name = $persons_name;		
		}			
		function set_name($new_name) {   	
			$this->name = $new_name;
		}	

		function get_name() {
			return $this->name;
		}		
			
	}
?>		

