<?php

include ('dog.php');

class Snake {
	public function eat_bugs()
	{
		echo "He eats bugs<br/>";
		// creating an object Dog
		$my_dog = new Dog();
		$my_dog->eat_snake();
	}
}

// Creating the snake object
$my_snake = new Snake();
$my_snake->eat_bugs();
