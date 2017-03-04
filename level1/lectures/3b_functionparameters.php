<style>
	.fs{
		color:red;
		font-size:2em;
		width:320px;
		border:2px solid black;
		padding:5px;
	}

</style>
<?php 

	function sayHello($name){
		$visitor = "<span class='fs'>".$name." welcome to our club</span>";
		return $visitor;
	}
	echo sayHello("Alex");

?>