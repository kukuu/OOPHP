<style>
	.separator {
		border-bottom:1px solid #ffcc33;
	}
</style>

<?php
	//The simple XML iterator is a recursive iterator 
	//that allows you to access all the nodes within an XML document
	
	//instantiate an object from the SimpleXMLIterator class 
	$it = new SimpleXMLIterator(file_get_contents('7b_simple_xml_iterator.xml'));
	
	foreach($it as $key=>$node){
		//`echo $key. "<br />";
		if($it->hasChildren()){
			foreach($it->getChildren() as $element=>$value){
				echo"<div class='separator'>";
				echo "\t <span class='capitalise-first'>".$element. " : </span>" .$value;
				echo"</div>";
			}	
		}
		echo "<br />";
	}
?>