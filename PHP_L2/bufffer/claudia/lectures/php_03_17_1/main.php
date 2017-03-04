<html>
<head>
	<style>
		#artist {
			color:#ff9999;
		}
		#hobby {
			color:#0000ff;
		}
	</style>
</head>
<body>
<?php 
$catalog = simplexml_load_file('catalog.xml');

foreach ($catalog->cd as $cd) {
	echo "<span id=\"artist\">";
	echo "<strong>{$cd->artist}</strong>";
	echo "</span>";
	echo " hobby: <span id= \"hobby\">{$cd->hobby}</span>";
	echo " star: {$cd->star}";
	echo "<br>";
}
?>
</body>
</html>