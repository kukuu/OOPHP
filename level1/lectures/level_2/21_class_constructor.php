<?php
	class BaseClass {
	   function __construct() {
	       print "In BaseClass constructor\n <br />";
	   }
	}
	
	class SubClass extends BaseClass {
	   function __construct() {
	       parent::__construct();
	       print "In SubClass constructor\n";
	   }
	   
	}
	
	class SubSubClass extends BaseClass {
	   function __construct() {
	       parent::__construct();
	       print "In SubSubClass constructor\n";
	   }
	   
	}
	
	//$obj = new BaseClass();
	//$obj = new SubClass();
	$obj = new SubSubClass();
?> 
