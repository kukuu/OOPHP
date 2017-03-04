<html>
<head>
	<style>
		strong {
			color:#ff9999;
		}
	</style>
</head>
<body>
<?php

$it = new SimpleXMLIterator(file_get_contents('file.xml'));

foreach ($it as $key=>$node) {
	if ($it->hasChildren()) {
		foreach ($it->getChildren() as $element=>$value) {
			echo "<strong>{$element}</strong>:  {$value}";
			echo "<br/>";
		}
	}
	echo "<br/>";
}
?>
</body>
</html>