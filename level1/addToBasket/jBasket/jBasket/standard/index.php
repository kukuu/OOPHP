<?php require("inc/functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajaxed Shopping Basket</title>
<link href="inc/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="inc/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="inc/js/custom.js"></script>
</head>

<body>

<div id="mainWrap">



	<div id="headerWrap">

	</div>
	
	<div id="contentWrap">
	
		<div id="contentWrapLeft">
			<div class="productWrap">
				<div class="productImageWrap">
					<img src="http://www.goldhawk-college.com/istudio/addtobasket/images/green.jpg" width="150" height="162" alt="Product1" />
				</div>
				<div class="productNameWrap">
					Green top
				</div>
				<div class="productPriceWrap">
					<div class="productPriceWrapLeft">
						&pound;95
					</div>
					<div class="productPriceWrapRight">
						<a href="/addToBasket/jBasket/jBasket/standard/inc/functions.php?action=addToBasket&productID=1" onClick="return false;">
							<img src="images/add-to-basket.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_1" />
						</a>
					</div>	
				</div>
			</div>
			<div class="productWrap">
				<div class="productImageWrap">
					<img src="http://localhost/lectures/level_2/addtobasket/images/red.jpg" alt="Product2" width="150" height="162" />
				</div>
				<div class="productNameWrap">
					Red top				</div>
				<div class="productPriceWrap">
					<div class="productPriceWrapLeft">
						&pound;38
					</div>
					<div class="productPriceWrapRight">
						<a href="/addToBasket/jBasket/jBasket/standard/inc/functions.php?action=addToBasket&productID=2" onClick="return false;">
							<img src="images/add-to-basket.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_2" />
						</a>
					</div>
				</div>
			</div>
			<div class="productWrap">
				<div class="productImageWrap">
					<img src="http://localhost/lectures/level_2/addtobasket/images/blue.jpg" alt="Product3" width="150" height="160"/>
				</div>
				<div class="productNameWrap">Blue top </div>
				<div class="productPriceWrap">
					<div class="productPriceWrapLeft">
						&pound;70
					</div>
					<div class="productPriceWrapRight">
						<a href="/addToBasket/jBasket/jBasket/standard/inc/functions.php?action=addToBasket&productID=3" onClick="return false;">
							<img src="images/add-to-basket.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_3" />
						</a>
					</div>
				</div>
			</div>

		</div>
		
		
		<div id="contentWrapRight">
			<div id="basketWrap">
				<div id="basketTitleWrap">
					Your Basket <span id="notificationsLoader"></span>
				</div>
				<div id="basketItemsWrap">
					<ul>
					<li></li>
					<!--<?php getBasket(); ?>-->
					</ul>
				</div>
			</div>
		</div>
		
	</div>

</div>
	
</body>
</html>
