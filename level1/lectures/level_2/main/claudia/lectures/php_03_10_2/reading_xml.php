<?php

$books = simplexml_load_file('books.xml');

foreach($books->book as $item) {
	echo "<strong>{$item->title}</strong> was written by {$item->author} <br/>";
	echo "<img src=\"{$item->picture['href']}\" height=\"{$item->height}\" width=\"{$item->width}\">";
}