
<?php
	//A variant of the elseif statement
	//Exercise: set a switch to display any of the three possible outcomes.
	// Other than the default shown.
	$category ="news";
	switch ($category) {
		case "news";
		echo "<p>what's happening around the world</p>";
		break;
		case "weather";
				echo "<p>Your weekly forecast</p>";
		break;
		case "sports";
				echo "<p>Latest sports hi-lights</p>";
		break;
		default;
		echo "<p>Welcome to my website</p>";
		
	}

?>
