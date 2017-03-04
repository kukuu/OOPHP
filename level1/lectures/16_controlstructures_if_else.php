
<?php 
	$secretNumber = 451;
	$_POST['guess']= 453 ;
	if($_POST['guess'] == $secretNumber) {
		echo "<p>Congratulations!</p>";
	}
	else {
		echo "<p>Sorry</p>";
} 
?>
