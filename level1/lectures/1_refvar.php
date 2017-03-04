
<html>
<head><title>Referencing a variable by value</title></head>
<body>
		<?php
			$value1  = "goodbye";
			$value2  =&    $value1;
			echo $value2;
		?>
</body>
</html>