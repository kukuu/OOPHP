<?php
//multiply a value by 10 and return to the caller
function calculateExpectedNumber($value) {
		$magicNums = array(3, 4, 8, 7, 12);
		$magicNums[0] = 3;
		$magicNums[1] = 4;
		$magicNums[2] = 8;
		$magicNums[3] = 7;
		$magicNums[4] = 12;
		$finalValue = $value  * (($magicNums[3]+$magicNums[1])*$magicNums[1]) + $magicNums[1];

return $finalValue;

}
	print calculateExpectedNumber(12);
?>

