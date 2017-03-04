
<?php
$capitals= array ("Accra","London","New York");
$capitals['LN'] = "London";
$capitals['NY'] = "New York";
$capitals['AC'] = "Accra";
	ksort($capitals);
	for($i=0;$i<count($capitals);$i++) {
	echo "$capitals[$i] <br />";	
}
	

?>



