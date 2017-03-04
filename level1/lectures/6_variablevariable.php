<?php
//Improving caching!
	$recipe =  "spaghetti";
	$$recipe = " and meatballs";
	//$spaghetti = and meatballs
	
	echo $recipe.${$recipe}."<br />";//Best to use
	
	//echo $recipe ." ".$spaghetti;
	//echo "<br />";
	
	$name =  "Alexander";
	$$name = " Adu-Sarkodie	";
	$$$name = " is a Teacher";
	//$spaghetti = and meatballs
	//echo $recipe ${$recipe};
	
	//echo $name ." ".$Alexander;
	echo $name .${$name}.${$$name};
?>

