<?php
	$shirtinfo = array("size"=>"larg","colour"=>"blue");
	$first = $shirtinfo(["size"]);
	$key = key($shirtinfo);
	echo "$key : $first";
	
	foreach (arrayname as keyname=>value){
		echo "keynmae:valuenam";
	}
	
	foreach ($hirtinfo as $S=>$V){
		echo "$S:$V";
	}
	
	$family = Array("John","Philip","John");
	$family = Array("Green","Dyer","Penbrook");
	
	//regular arrays
	
	$rows= count($family);
	$cols = count($family[0])
	
	foreach ($i=0;$i<$rows;$i++){
		foreach($j=0;$j<$cols;$j++){
			echo $family[$i][$j];
		}
	}
	
	//rugged arrays
	
	foreach ($i=0;$i<$rows;$i++){
		$cols = count($family[0]);
		foreach($j=0;$j<$cols;$j++){
			echo $family[$i][$j];
		}
	}

?>