//Overriding methods 
//Sometimes (when using inheritance,) you may need to change how a method works from the base class. 
//For example, let's say set_name() method in the 'employee' class, had to do something different than what it does in //the 'person' class.  
//You 'override' the 'person' classes version of set_name(), by declaring the same method in 'employee'. 
//The code snippet: 
<?php
	class person {
		protected function set_name($new_name) {
			if ($name != "Jimmy Two Guns") {
				$this->name = strtoupper($new_name);
			}
		}
	} 

	class employee extends person {
		protected function set_name($new_name) {
			if ($new_name == "Stefan Sucks") {
				$this->name = $new_name;
			}
		}
	}
?>
//Notice how set_name() is different in the 'employee' class from the version found in the parent class: 'person'. 
