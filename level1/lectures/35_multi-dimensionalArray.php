<?php
//All products are related by a common feature "price, so we label them as //$productPrices"
//secondly, we put them into categories: clothing,linen, and furniture- 3 keys
//Each key consist of 2 key value pairs
//shirt/pants :20.00/22.50 etc

$productPrices['clothing']['shirt'] = 20.00;
$productPrices['clothing']['pants'] = 22.50;
$productPrices['linens']['blanket'] = 25.00;
$productPrices['linens']['bedspread'] = 50.00;
$productPrices['furniture']['lamp'] = 44.00;
$productPrices['furniture']['rug'] = 75.00;
 
 //assign a variable to store your operation
 $shirtprice = $productPrices['clothing']['shirt'];
 
//render or execute the assigned variable

echo  $shirtprice;

 
 ?>

