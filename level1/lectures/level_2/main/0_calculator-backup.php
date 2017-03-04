
<?php
	
	#Author: Alexander Adu-Sarkodie
	# Application name: Calculator
	
	$page_title = 'e-Commerce widget Calculator';
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
			
		echo '<h1>e-Commerce Widget Calculator</h1>	
		<p>The total cost of purchasing ' . $_POST['quantity']. ' widgets at £' . number_format($_POST['price'],2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is £' . number_format($total,2) . '</p>';		
		}
		
		else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
	
		if($total > 10){
			$discountRate = "0.05%";
			$discountedTotal = 0;	
			$discountedTotal = $total - ($discountRate * $total);
			 echo "You're entitled to a discount of ".$discountRate; 
			 echo " You'll get your items at £ " .number_format($discountedTotal,2).".";
			 $infoText = " Instead of ".number_format($total,2)." <br />Many thanks (::)";
			 echo $infoText;
		}
		
		  //elseif ($total == 8){
			  //$infoText = "Just add a couple more apples and get your discount!";	
			  //$infoText2 = "Be wise, buy a bit more and pay a bit less";
			 // echo $infoText.$infoText2;
		  //}
		
		 else {
			  echo "Sorry, you're not entitled to a discount. You have to buy exceeding £10. Be wise, buy a bit more and pay a bit less --)."; 
		  }
		  
		  
		  $today = "Sunday";
		  
		  switch($today) {
			  //in case value corresponds to Saturday or to Sunday do this:	
			  case "Saturday":		
			  case "Sunday":	
			  echo "<br />It's the weekend: great! The Best deals and sales are on today. ";
			  echo "Today is " .$today. " --)";
			  //no need to keep going:
			  break;		
			  case "Friday":
			  echo "<br /> Almost weekend time! ";
			  echo "Today is ".$today;
			  //no need to keep going
			  break;
			  //in all other cases do this instead
			  default:
			  echo " <br />Just an ordinary weekday: keep up the good work --). More deals on weekends";
			  echo " Today is " .$today ."!!!!";
		}
?>

<!-- Allowing stickyness -->
<form action="0_calculator.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php  if(isset($_POST['quantity'])) echo $_POST['quantity']  ; //values sent to php script above ?>" /></p>
	<p>Price: <input type="text" name="price" size="5" maxlength="10" value="<?php  if(isset($_POST['price'])) echo $_POST['price']  ; //values sent to php script above  ?>" /></p>
	<p>Tax(%): <input type="text" name="tax" size="5" maxlength="5" value="<?php  if(isset($_POST['tax'])) echo $_POST['tax']  ;  //values sent to php script above ?>" /></p>
	<p><input type="submit" name="submit" value="Calculate" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>
<?php
		include('includes/footer.html');
?>
