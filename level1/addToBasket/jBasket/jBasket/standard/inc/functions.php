<?php require("db.php"); ?>
<?php

session_start();
$sessionID = $_COOKIE['PHPSESSID'];

if($_POST['action'] != '' || $_GET['action'] != '') {
	if($_POST['action'] == '')
	{
		$action 	= $_GET['action'];
		$productID	= $_GET['productID'];
		$noJavaScript = 1;
	} else {
		$action 	= $_POST['action'];
		$productID	= $_POST['productID']; 
		$noJavaScript = 0;
	}
}
	
if ($action == "addToBasket"){

	$productInBasket 	= 0;
	$productTotalPrice	= 0;

	$query  = "SELECT * FROM products WHERE productID = " . $productID;
	$result = mysql_query($query);
	$row = mysql_fetch_array( $result );

	$productPrice 		= $row['productPrice'];	
	$productName		= $row['productName'];	
	

	$query = "INSERT INTO baskets (productID, productPrice, basketSession) VALUES ('$productID', '$productPrice', '$sessionID')";
	mysql_query($query) or die('Error, insert query failed');	

	$query  = "SELECT * FROM baskets WHERE productID = " . $productID . " AND basketSession = '" . $sessionID . "'";
	$result = mysql_query($query) or die(mysql_error());;
	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		$totalItems 	= $totalItems + 1;
		$productTotalPrice 	= $productTotalPrice + $row['productPrice'];
	}
	
	if ($noJavaScript == 1) {
		header("Location: ../index.php");
	} else {
		echo ('<li id="productID_' . $productID . '"><a href="/addToBasket/jBasket/jBasket/standard/inc/functions.php?action=deleteFromBasket&productID=' . $productID . '" onClick="return false;"><img src="/addToBasket/jBasket/jBasket/standard/images/delete.png" id="deleteProductID_' . $productID . '"></a> ' . $productName . '(' . $totalItems . ' items) - &pound;' . $productTotalPrice . '</li>');
	}

}


if ($action == "deleteFromBasket"){
	
	$query = "DELETE FROM baskets WHERE productID = " . $productID . " AND basketSession = '" . $sessionID . "'";
	mysql_query($query) or die('Error, delete query failed');
		
	if ($noJavaScript == 1) {
		header("Location: ../index.php");
	}	
}


function getBasket(){
	
	session_start();
	$sessionID = $_COOKIE['PHPSESSID'];
	
	$query  = "SELECT * FROM baskets WHERE basketSession = '" . $sessionID . "' GROUP BY productID ORDER By basketID DESC";
	$result = mysql_query($query);
	//echo $query;
	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		
		$query2  = "SELECT * FROM products WHERE productID = " . $row['productID'];
		$result2 = mysql_query($query2);
		$row2 = mysql_fetch_array( $result2 );
	
		$productID	 		= $row2['productID'];
		$productPrice 		= $row2['productPrice'];	
		$productName		= $row2['productName'];	
	
		$query2  = "SELECT COUNT(*) AS totalItems FROM baskets WHERE basketSession = '" . $sessionID . "' AND productID = " . $productID;
		$result2 = mysql_query($query2);
		$totalItems = $row2['totalItems'];
		$basketText = $basketText . '<li id="productID_' . $productID . '"><a href=/addToBasket/jBasket/jBasket/standard/inc/functions.php?action=deleteFromBasket&productID=' . $productID . ' onClick="return false;"><img src="/addToBasket/jBasket/jBasket/standard/images/delete.png" id="deleteProductID_' . $productID . '"></a> ' . $productName . '(' . $totalItems . ' items) - &pound;' . ($totalItems * $productPrice) . '</li>';
		
	}
	echo $basketText;
}
	

?>