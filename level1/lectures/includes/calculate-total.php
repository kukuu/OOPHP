<?php 

	function calculate_total($qty,$cost,$tax) {
			$total = ($qty * $tax);
			$taxrate = ($tax / 100);// turns 5% to 0.05
			$total += ($total * $taxrate);//add the tax
			//$total = ($qty * $tax)*(($tax / 100) + 1);
			
			
			//prints the result
		
			echo '<p>The total cost of purchasing ' . $qty. 
			' widget(s) at &pound;' . number_format($cost,2) . 
			' each, including a tax rate of ' . $tax . '%, is &pound;' . 
			number_format($total,2) . '</p>';	

	} 
?>