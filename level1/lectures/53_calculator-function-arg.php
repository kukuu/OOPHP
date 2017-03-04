<?php
	
	#Author: Aleander Adu-Sarkodie
	# Application name: Calculator
	
	$page_title = 'Widget Cost Calculator- using functions and arguments';
	include('includes/header.html');
	
	//This function calculates a total and then prints the result
		include('includes/calculate-total.php'); //End of function
	//check for form submission
	if (isset($_POST['submitted'])){
	
		//form validation
		if(is_numeric($_POST['quantity']) && 
		is_numeric($_POST['price']) && 
		is_numeric($_POST['tax'])) {
			
			//Print the heading
		echo '<h1>Total cost</h1>';
			
			//Now call the function
			calculate_total($_POST['quantity'],$_POST['price'],$_POST['tax']);
			
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
?>


<h3>Widget Cost Calculator</h3> 
<form action="53_calculator-function-arg.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php  if(isset($_POST['quantity'])) echo $_POST['quantity']  ; ?>" /></p>
	<p>Price: <input type="text" name="price" size="5" maxlength="10" value="<?php  if(isset($_POST['price'])) echo $_POST['price']  ; ?>" /></p>
	<p>Tax(%): <input type="text" name="tax" size="5" maxlength="5" value="<?php  if(isset($_POST['tax'])) echo $_POST['tax']  ; ?>" /></p>
	<p><input type="submit" name="submit" value="Calculate" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
		include('includes/footer.html');

?>
