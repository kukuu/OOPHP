<?php
/*
* A class is a blue print for defining object instances
*/
class Person {
	public $name;	
	
	/*
	* function to set the value of the name
	* @param $new_name
	*/
	public function set_name($new_name) {
		$this->name = $new_name;
	}
	
	/*
	* function to get the value of the name
	*/
	public function get_name() {
		return $this->name;
	}
}
?>