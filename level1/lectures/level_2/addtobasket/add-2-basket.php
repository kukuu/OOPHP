
<!doctype html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Alexander Adu-Sarkodie - LoveliFolk Home Page - eCommerce</title>
	<!-- 3. OGT: open graph tags; Including Facebook Apps -->
	<meta property="og:title" content="share technology" />
	<meta property="og:type" content="activity" />
	<meta property="og:url" content="htttp://www.goldhawk-college.com/istudio/flickr/index.html" />
	<meta property="og:image" content="htttp://www.goldhawk-college.com/responsive.gif" />
	<meta property="og:site_name" content="goldhawk-college.com.com/flickr/index.html" />
	<meta property="fb:admins" content="1" />
		<!-- end: open graph tags -->
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta name="viewport" content="Alexander Adu-Sarkodie,Responsive Design, eCommerce, , Add to basket, Flexible Grid, Media Queries, Media Query Listeners, HTML5" />
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
	 <script src="js/lib/modernizr-2.5.3.min.js"></script>
	 <script src="js/simpleCart.js"></script>
	 <script type="text/javascript">
		simpleCart = new cart("lovelifolk");//Create a Lovelifolk instance (cart Object)
	</script>
	<style>
		.uiIconText {
			display:none !important;
		}
		
		form input, h3.calculator {display:inline;margin-right:10px;}
		
		form, .calculator  {margin-left:47px;color:#5E5E60;}
		
		form {border-bottom: 1px solid #3E3F43;width:90%;margin-bottom:-30px;}
		
		.error {color:#ff0000}
		
		p {color:#5E5E60;}
		
	</style>
	 	
</head>
<body id="home">
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<!-- 1. Like Button Code: For facebook integration -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
	  		var js, fjs = d.getElementsByTagName(s)[0];
	 		if (d.getElementById(id)) return;
	  		js = d.createElement(s); js.id = id;
	  		js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
	  		fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>
    <section>
        <div id="page">        
				<header>		
                	<div class="lede">
						<h1><img src="images/logo.jpg" width="275" height="49" alt="LoveliFolk" border="0"></h1>
						<div class="settings">
							<ul>
								<li>Home</li>
								<li><a href="#">SHOP</a></li>
								<li><a href="#">ABOUT</a></li>
								<li class="last"><a href="#">CONTACT</a></li>
							</ul>
							<span class="basket"></span>
							<span class="items simpleCart_items"></span>
							<a href="#" class="simpleCart_empty">empty cart</a>	
						</div>
					</div>
					</header>
                    <article>
                        <div class="splash">
							<img src="images/splash.jpg" width="904" height="298" alt="Lovelifolk" border="0">
                      </div>
                	</article>
					<article>
                        <div class="strapline">
							<div class="left-col">
							<h2 class="label-text featured">Featured products</h2>
								<ul>
								<!-- item -->
									<li>
										<div class="product"><img src="images/green.jpg" width="70" height="71" alt="Green top" border="0">
											<div class="addto-basket">
												<a href="#" onclick="simpleCart.add('name=Green top','price=90');return false;"><span class="basket"></span>
												<span class="addto-text">Add to <br />basket</span></a>
											</div>
										</div>
										<div class="summary"><h3>Green Shirt - &pound;30 <small>(tax:5%)</small></h3><p>Lorem ipsum dolor sit amet consecteur adispiscing elit sed du eismod tempor incidudunt ut labore et dolore magna aliqua.</p></div>
									</li>
								<!-- item -->
									<li>
										<div class="product"><img src="images/red.jpg" width="69" height="70" alt="Red top" border="0">
											<div class="addto-basket">
																<a href="#" onclick="simpleCart.add('name=Red top','price=60');return false;"><span class="basket"></span>
												<span class="addto-text">Add to <br />basket</span></a>
											</div>
										</div>
										<div class="summary"><h3>Red Shirt - &pound;20<small>(tax:9%)</small></h3><p>Lorem ipsum dolor sit amet consecteur adispiscing elit sed du eismod tempor incidudunt ut labore et dolore magna aliqua.</p></div>
									</li>
									<!-- item -->
									<li>
										<div class="product"><img src="images/blue.jpg" width="71" height="71" alt="Blue top" border="0">
											<div class="addto-basket">
												<a href="#" onclick="simpleCart.add('name=blue top','price=30');return false;"><span class="basket"></span>
												<span class="addto-text">Add to <br />basket</span></a>
											</div>
										</div>
										<div class="summary"><h3>Blue Shirt - &pound;18<small>(tax:12%)</small></h3><p>Lorem ipsum dolor sit amet consecteur adispiscing elit sed du eismod tempor incidudunt ut labore et dolore magna aliqua.</p></div>
									</li>
								</ul> 
								<!-- 1 -->
							</div>
							<div class="middle-col">
								<img src="images/mens.jpg" width="286" height="287" alt="Men's" border="0">
								<h2 class="label-text">Mens</h2>
								<p class="summary-text">Lorem ipsum dolor sit amet consecteur adispiscing elit sed du eismod tempor incidudunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
								
							</div>
							<div class="right-col">
								<img src="images/ladies.jpg" width="287" height="287" alt="Ladies" border="0">
								<h2 class="label-text">Accessories for......</h2>
								<p class="summary-text">Lorem ipsum dolor sit amet consecteur adispiscing elit sed du eismod tempor incidudunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
							</div>
                      </div>
                	</article>
        </div>      
    </section>
	<section>
		<?php
	
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
			
		echo '<h1 class="calculator">Total cost</h1>	
		<p>The total cost of purchasing ' . $_POST['quantity']. ' widgets at £' . number_format($_POST['price'],2) . ' each, including a tax rate of ' . $_POST['tax'] . '%, is £' . number_format($total,2) . '</p>';		
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
	//Now we leave the PHP section and create the form
	
	//Returning values
	
	//check for form submission
	if (isset($_GET['submitted'])){
	
		//form validation
		if(is_numeric($_GET['quantity']) && 
		is_numeric($_GET['price']) && 
		is_numeric($_GET['tax'])) {
			
			//calculate the results
			$total = ($_GET['quantity']) * ($_GET['price']);
			$taxrate = ($_GET['tax'] / 100);  //turns eg 5% to 0.05
			$total += ($total *  $taxrate); //add the taxrate to total
			
			//Now we print the result
			
		echo '<p style="padding-left:47px;">The total cost of purchasing ' . $_GET['quantity']. ' widgets at &pound;' . number_format($_GET['price'],2) . ' each, including a tax rate of ' . $_GET['tax'] . '%, is &pound;' . number_format($total,2) . '</p>';		
		} else { //invalid submitted values
			echo '<h1>Error</h1>
			<p class="error"> Please enter a valid quantity, price and tax</p>';
			
		}
	
	}//End of main isset() IF
?>
 
<!-- Allowing stickyness -->
<form action=<?=$_SERVER['PHP_SELF']?>  method="get">
	<p>Quantity: <input type="text" name="quantity" size="5" maxlength="10" value="<?php  if(isset($_POST['quantity'])) echo $_POST['quantity']  ; ?>" />
	Price: <input type="text" name="price" size="5" maxlength="10" value="<?php  if(isset($_POST['price'])) echo $_POST['price']  ; ?>" />
	Tax(%): <input type="text" name="tax" size="5" maxlength="5" value="<?php  if(isset($_POST['tax'])) echo $_POST['tax']  ; ?>" />
	<input type="submit" name="submit" value="Calculate" />
	<input type="hidden" name="submitted" value="TRUE" /></p>
</form>
	</section>
	<!--footer-->
    <footer>
			<div class="main-footer">
                <p><span class="join-us">Join us</span><img src="images/facebook.jpg" width="119" height="28" alt="Join us on Facebook" border="0"></p>
			<!-- Begin I like it -->
			<div  class="social-media">
						<div class="fb-like" data-href="http://www.goldhawk-college.com/istudio/flickr/" data-send="true" data-width="450" data-show-faces="true" data-action="recommend" data-colorscheme="dark" data-font="tahoma"></div>
			</div>
				<!-- end i lkie it -->
			</div>
	</footer>
	
	
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/lib/jquery-1.7.1.min.js"><\/script>')</script>
</body>
</html>
