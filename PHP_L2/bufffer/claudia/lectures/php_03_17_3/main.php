<?php include ('customer.php'); ?>
<html>
<header>
<style>
	.label_name {
		padding: 0 0 0 10px;
	}
	
	.label_other, label_summary {
		padding: 0 0 0 90px;
	}
	
	p {
		margin-top: -5px;
	}
	
	p.fname {
		margin: -110px 0 0 80px;
	}
	
	.content {
		margin-top: 10px;
		width:50%;
	}
	
	img {
		margin-bottom: 10px;
	}
</style>
</header>
<body>
<?php
$c1 = new Customer("Alexander", "Morgan", "The Anatolian Shepherd Dog is very loyal", "img1.jpg");
$c2 = new Customer("James", "Ballantyne", "The Belgian Shepherd", "img2.jpg");
?>
</body>
</html>
