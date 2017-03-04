<?php
	$shirtinfo = array ("size" =>"large", "colour" => "blue" ,"cost" => "12.00");
	$value =  $shirtinfo['size'];
	$key = key($shirtinfo);
echo "$key : $value <br />";	
?>
