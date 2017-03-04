<?php
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// match any character that is not a number between 0 and 9. Not in a class the carar symbol stands for not!
preg_match_all("/[^0-9]/", $string, $matches);

// loop through the matches with foreach
foreach($matches[0] as $value)
        {
        echo $value;
        }
			
?> 

