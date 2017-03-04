<?php
	$links = array("The apache web server"  =>  "www.apache.org", "Apres"  => "www.apres.com","The PHP scripting Language" => "www.php.net");
	echo "<strong>Online resources<strong>:<br />";
	foreach($links as $title  => $link) {
		echo "<a href=\"http://$link\">$title</a><br />"; 
}
?>







