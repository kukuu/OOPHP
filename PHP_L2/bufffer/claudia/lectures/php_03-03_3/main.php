<?php

class BaseClass {
	function __construct()
	{
		print "In BaseClass constructor\n <br/>";
	}
}

class SubClass extends BaseClass {
	function __construct()
	{
		BaseClass::__construct();
		print "In SubClass constructor\n <br/>";
	}
}

class SubSubClass extends BaseClass {
	function __construct()
	{
		parent::__construct();
		print "In SubSubClass construtor\n <br/>";
	}
}

// instantiating
//$obj1 = new SubClass();
$obj2 = new SubSubClass();
