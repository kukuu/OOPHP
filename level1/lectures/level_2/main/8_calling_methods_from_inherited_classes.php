<?php    include('classdog.php');    ?>
<?php    
	//calling a function from another class into base class. This file is the base or parent class
//This file is same as 3a_calling_methods_from_inherited_classes.php
	class snake {
		function eat_bugs() {
			echo  "He eats bugs <br />";
			
			//1. Now we instantiate the dog object from the base class and invoke the class. This is from the second class(classdog)
			$my_dog = new dog();
			
			//2. Now call a method from the dog class to the instantiated object
			$my_dog -> eat_snake();
		}	
	}
	
		
	$my_snake = new snake();//instantiate a snake object
	$my_snake -> eat_bugs();//call a method on the object from the class
   ?>