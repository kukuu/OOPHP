
<?php
//A class is a blue print or template for defining object instances
//This file sets data and creates methods (setters and getters)
	class Person {
			 $name;
			function set_name($new_name) { //setter
				$this->name = $new_name;
			}
			function get_name() { //getter
				return $this->name;
			}
		}
		
		
?>