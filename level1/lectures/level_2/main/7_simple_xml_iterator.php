<?php
	//The simple XML iterator is a recursive iterator 
	//that allows you to access 'ALL' the nodes within an XML document
	
	//instantiate an object from the SimpleXMLIterator class 
	//takes file_get_contents() function as a parameter
	//file_get_contents() takes an argument which is the xml file as a string
	$it = new SimpleXMLIterator(file_get_contents('7b_simple_xml_iterator.xml'));
	
	foreach($it as $key=>$node){
		//`echo $key. "<br />";
		if($it->hasChildren()){
			foreach($it->getChildren() as $element=>$value){
				echo "<strong>".$element. " : </strong>" .$value."<br />";	
			}	
		}
		echo "<br />";
	}
?>