<?php    include('classdog.php');    ?>
<?php    
	// This file is the base or parent class for this file
	class snake {
		function eat_bugs() {
			echo  "He eats bugs <br />";
			
			//1. Now we instantiate a dog object from the inherited class. 
			//This is  class(classdog)
			//subscribing  to the Class classdog object (properties and methods).
			//form of pub:sub 
			$my_dog = new dog();
			
			//2. Now call a method from the dog class on the instantiated object
			// Publishing from class Dog's eat_snake() method.
			$my_dog -> eat_snake();
		}	
	}
	
		
	$my_snake = new snake();//instantiate a snake object
	$my_snake -> eat_bugs();//call a method on the object from the class
   ?>