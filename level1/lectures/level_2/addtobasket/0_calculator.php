<?php
	
	#Author: Alexander Adu-Sarkodie
	# Application name: Calculator
	
	$page_title = 'Widget Cost Calculator';
	include('includes/header.html');
	
	//check for form submission
	if (isset($_POST['submitted'])){
	
		//form validation
		if(is_numeric($_POST['quantity']) && 
		is_numeric($_POST['price']) && 
		is_numeric($_POST['tax'])) {
			
			//calculate the results
			$total = ($_POST['quantity']) * ($_POST['price']);
			$taxrate = ($_POST['tax'] / 100);  //turns eg 5% to 0.05
			$total += ($total *  $taxrate); //add the taxrate to total
			
			//Now we print the result
			
		echo '<h1>Total cost</h1>	
		<p>The total cost of purchasing ' . $_POST['quantity']. ' widgets at &pound;' . number_format($_POST['price'],2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is &pound;' . number_format($total,2) . '</p>';		
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
?>

