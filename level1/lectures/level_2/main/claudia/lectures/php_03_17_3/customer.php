<?php

class Customer {
	private $first_name;
	private $last_name;
	private $summary;
	private $image;
	
	public function __construct($fn, $ln, $s, $img)
	{
		$this->setData($fn, $ln, $s, $img);
		$this->printData();
	}
	
	/**
	* Function to set values
	* @param $fn, $ln, $s, $img
	*/
	public function setData($fn, $ln, $s, $img)
	{
		$this->first_name = $fn;
		$this->last_name = $ln;
		$this->summary = $s;
		$this->image = $img;
	}
	
	/**
	* Print data
	*/
	public function printData()
	{
		echo "<div class = \"content\">";
		echo "<img width=\"80\" height=\"100\" src=\"./img/{$this->image}\">";
		echo "<p class=\"label_name fname\"><strong>Owner</strong><br/> Name: {$this->first_name}</p>";
		echo "<p class=\"label_other\">Surname: {$this->last_name}</p>";
		echo "<p class=\"label_summary\"><strong>Profile</strong><br/>{$this->summary}</p><br/>";
		echo "</div>";
	}
	
}