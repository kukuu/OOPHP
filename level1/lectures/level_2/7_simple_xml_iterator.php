<?php
	//The simple XML iterator is a recursive iterator 
	//that allows you to access all the nodes within an XML document
	
	//instantiate an object from the SimpleXMLIterator class 
	$it = new SimpleXMLIterator(file_get_contents('7b_simple_xml_iterator.xml'));
	
	foreach($it as $key=>$node){//Loop through all nodes
		//echo $key. "<br />";
		if($it->hasChildren()){//check if node has children
			foreach($it->getChildren() as $value){
				echo $value. "<br />";
			}	
		}
		echo "<br />";
	}
?>