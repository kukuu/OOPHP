<html>
<head>
	<title>Multi dimensional array</title>
</head>
<body>
	<?php
		
		echo  "<br /><strong>The values of this data set is comming from a multi-dimensional array<br /></strong>";
		$productPrices['clothing']['shirt'] = 20.00;
		$productPrices['clothing']['pants'] = 22.50;
		$productPrices['linens']['blanket'] = 25.00;
		$productPrices['linens']['bedspread'] = 50.00;
		$productPrices['furniture']['lamp'] = 44.00;
		$productPrices['furniture']['rug'] = 75.00;
		 
		
		 print "The price of a shirt is £ {$productPrices['clothing']['shirt']}<br />";
		
		 print "Below is the full data set from the multi-dimensional array<br />";
		 print "<table border=1>";
			foreach($productPrices as $productPrice) {
			foreach ($productPrice as $product => $price){
				$f_price = sprintf("%01.2f",$price);
				echo  "<tr><td>$product : </td> <td>£ $f_price </td></tr>";
			}
		
		}
		echo "</table>";
	?>
</body>
</html>