<?php
	$capitals =  array("CA" => "Saccramento", "TX" => "Austin", "OR" => "Salem");
	ksort($capitals); //sort by key
	foreach($capitals as $state => $city) {
		echo "$city ,  $state <br />";
}
?>

