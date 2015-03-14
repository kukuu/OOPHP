<?php    include('classdog.php');    ?>
<?php    
	//calling a function from another class into base class. This file is the base or parent class
	class snake {
		function eat_bugs() {
			echo  "He eats bugs <br />";
			
			//1. Now we instantiate the dog object from the base class and invoke the class. This is from the second class(classdog)
			$my_dog = new dog();
			
			//2. Now call a method from the dog class to the instantiated object
			$my_dog -> eat_snake();
		}	
	}
   ?>
















