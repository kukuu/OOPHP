<?php
$books = simplexml_load_file('5_book.xml');

//1. make parent node an array container.A complex variable:$books
//2, Make each node an instance of the complex variable to hold its data:book as $book
//3/ Loop for each each key value pair

foreach ($books->book as $book) {
 		 echo "<strong>{$book->title}</strong> was written by {$book->author} <br>\n";
	}//Add image.See student.php
?>

