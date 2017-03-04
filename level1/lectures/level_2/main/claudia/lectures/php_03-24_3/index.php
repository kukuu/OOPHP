<?php

$page_title = 'e-Commerce widget calculator';
include('header.html');

if (isset($_POST['submitted'])) {
	if (
		is_numeric($_POST['quantity']) &&
		is_numeric($_POST['price']) &&
		is_numeric($_POST['tax'])
	) {
		$total = ($_POST['quantity']) * ($_POST['price']);
		$taxrate = ($_POST['tax'] / 100);
		$total += ($total * $taxrate);
		echo "<h1>Commerce widget calculator</h1>";
		echo "<p>The total cost of purchasing" .$_POST['quantity']. " widgets at &pound;".number_format($_POST['price'])."</p>";
		echo " each including a tax rate of ".$_POST['tax']. "each, including a tax rate of ". $_POST['tax'] . "%, is &pound;". number_format($total,2);
	} else {
		echo "<h1>Error</h1><p>Please enter a valid quantity, price and tax</p>";
	}
}
?>
<form action="index.php" method="post">
	<p>Quantity: 
	<input type="text" name="quantity" size="5" maxlength="10" value="<?php
		if (isset($_POST['quantity'])) {
			echo $_POST['quantity'];
		} ?>">
	</p>
	<p>Price: 
	<input type="text" name="price" size="5" maxlength="10" value="<?php
		if (isset($_POST['price'])) {
			echo $_POST['price'];
		} ?>">
	</p>
	<p>Tax(%): 
	<input type="text" name="tax" size="5" maxlength="5" value="<?php
		if (isset($_POST['tax'])) {
			echo $_POST['tax'];
		} ?>">
	</p>
	<p>
		<input type="submit" name="submit" value="Calulate"/>
		<input type="hidden" name="submitted" value="TRUE"/>
	</p>
</form>
<?php
 include('footer.html');
?>

