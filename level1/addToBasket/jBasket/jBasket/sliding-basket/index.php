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

	<div id="slidingTopWrap">
		<div id="slidingTopContent">
			<div id="basketWrap">
				<div id="basketTitleWrap">
					Your Basket <span id="notificationsLoader"></span>
				</div>
				<div id="basketItemsWrap">
					<ul>
					<li></li>
					<?php getBasket(); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="slidingTopFooter">
			<div id="slidingTopFooterLeft">
				<img src="images/arrow-down.png" alt="Show Basket" /> <a href="no-js.htm" onclick="return false;" id="slidingTopTrigger">Show Basket</a>
			</div>
		</div>
	</div>
		
 	<div id="wrdInfoWrap">
		<div id="wrdInfoWrapLeft">
			<a href="http://www.webresourcesdepot.com/"><img src="images/wrd-logo.jpg" alt="WebResourcesDepot" border="0" /></a>
		</div>
		<div id="wrdInfoWrapRight">
			<div id="wrdTutorialInfo"><a href="http://www.webresourcesdepot.com/ajaxed-sliding-shopping-cart-with-jquery"><strong>Ajaxed Sliding Shopping Cart With jQuery</strong> tutorial & source files</a>.
			</div>
		</div>
	</div>
	
	<div id="headerWrap">
	
	</div>
	
	
	<div id="contentWrap">
	
		<div id="contentWrapLeft">
				<div class="productWrap">
					<div class="productImageWrap">
						<img src="images/product1.jpg" alt="Product1" />
					</div>
					<div class="productNameWrap">
						Krups Coffee Maker
					</div>
					<div class="productPriceWrap">
						<div class="productPriceWrapLeft">
							$95
						</div>
						<div class="productPriceWrapRight">
							<a href="inc/functions.php?action=addToBasket&productID=1" onClick="return false;">
								<img src="images/add-to-basket2.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_1" />
							</a>
						</div>	
					</div>
				</div>
				<div class="productWrap">
					<div class="productImageWrap">
						<img src="images/product2.jpg" alt="Product2" />
					</div>
					<div class="productNameWrap">
						Keurig Cup					</div>
					<div class="productPriceWrap">
						<div class="productPriceWrapLeft">
							$38
						</div>
						<div class="productPriceWrapRight">
							<a href="inc/functions.php?action=addToBasket&productID=2" onClick="return false;">
								<img src="images/add-to-basket2.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_2" />
							</a>
						</div>
					</div>
				</div>
				<div class="productWrap">
					<div class="productImageWrap">
						<img src="images/product3.jpg" alt="Product3" />
					</div>
					<div class="productNameWrap">Coffee Pro </div>
				  <div class="productPriceWrap">
						<div class="productPriceWrapLeft">
							$129
						</div>
						<div class="productPriceWrapRight">
							<a href="inc/functions.php?action=addToBasket&productID=3" onClick="return false;">
								<img src="images/add-to-basket2.gif" alt="Add To Basket" width="111" height="32" id="featuredProduct_3" />
							</a>
						</div>
					</div>
				</div>

		</div>
		
		
		<div id="contentWrapRight">
			<div id="bannerWrap">
				<a href="http://www.sslmatic.com/"><img src="images/sslmatic-banner-230x120.jpg" alt="SSLmatic" border="0" /></a>
			</div>
		</div>
		
	</div>
	
</div>
	
</body>
</html>
