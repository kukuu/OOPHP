<?php

$catalog = simplexml_load_file('catalog.xml');

//1. make parent node an array container.A complex variable:$books
//2 Make each node a variable to hold its data:book as book -> $book
//3 Loop for each each key value pair

foreach ($catalog->cd as $cd) {
  echo "<span style='color:#ff9999'><strong>{$cd->artist}</strong></span> was born in <span style='color:#0000ff;'>{$cd->country}</span> $cd-><img src='/lectures/images/teddy.gif'><br>\n";
}
?>