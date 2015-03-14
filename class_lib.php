<?php
//A class is a blue print or template for defining object instances
	class person {
		public $name;
			function set_name($new_name) {
				$this->name = $new_name;
			}
			function get_name() {
				return $this->name;
			}
	}
?>