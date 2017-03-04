<?php
	
	#Author: Aleander Adu-Sarkodie
	# Application name: Calculator
	
	$page_title = 'Widget Cost Calculator- using functions and arguments';
	include('includes/header.html');
	
	//The end result of setting  a default argument value is that
	//that particular argument becomes optional when calling the function.
	// If a value is passed to it, the passed value is used; 
	//otherwise the default value is used
	
	function calculate_total($qty,$cost,$tax = 5) {
		$total = ($qty * $tax);
		$taxrate = ($tax/100);// turns 5% to 0.05
		$total += ($total * $taxrate);//add the tax
		
		//prints the result
	
		echo '<p>The total cost of purchasing ' . $qty. 
		' widget(s) at £' . number_format($cost,2) . 
		' each, including a tax rate of ' . $tax . '%, is £' . 
		number_format($total,2) . '</p>';	

	} //End of function
	
	
	
	//check for form submission
	if (isset($_POST['submitted'])){
	
		//form validation
		if(is_numeric($_POST['quantity']) && 
		is_numeric($_POST['price'])) {
			
			//Print the heading
		echo '<h1>Total cost</h1>';
			
			//Now call the function with or without tax
			if (is_numeric($_POST['tax'])){
			
				calculate_total($_POST['quantity'],$_POST['price'],$_POST['tax']);
			} else {
				calculate_total($_POST['quantity'],$_POST['price']);
			}
			//End: Call to function with or without tax
			
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
?>


<h3>Widget Cost Calculator</h3> 
<form action="52_calculator-function-default-arg.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php  if(isset($_POST['quantity'])) echo $_POST['quantity']  ; ?>" /></p>
	<p>Price: <input type="text" name="price" size="5" maxlength="10" value="<?php  if(isset($_POST['price'])) echo $_POST['price']  ; ?>" /></p>
	<p>Tax(%): <input type="text" name="tax" size="5" maxlength="5" value="<?php  if(isset($_POST['tax'])) echo $_POST['tax']  ; ?>" />(optional)</p>
	<p><input type="submit" name="submit" value="Calculate" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
		include('includes/footer.html');

?>
