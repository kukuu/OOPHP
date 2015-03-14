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
		<p>The total cost of purchasing ' . $_POST['quantity']. ' widgets at £' . number_format($_POST['price'],2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is £' . number_format($total,2) . '</p>';		
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
?>


<h3>eCommerce widget: Cost Calculator</h3> 
<!-- Allowing stickyness -->
<form action="0_calculator.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php  if(isset($_POST['quantity'])) echo $_POST['quantity']  ; ?>" /></p>
	<p>Price: <input type="text" name="price" size="5" maxlength="10" value="<?php  if(isset($_POST['price'])) echo $_POST['price']  ; ?>" /></p>
	<p>Tax(%): <input type="text" name="tax" size="5" maxlength="5" value="<?php  if(isset($_POST['tax'])) echo $_POST['tax']  ; ?>" /></p>
	<p><input type="submit" name="submit" value="Calculate" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
		include('includes/footer.html');
?>
