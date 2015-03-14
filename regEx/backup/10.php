<?php
// create a string
$string = 'This is a [templateVar]';

// try to match our pattern
preg_match_all("/[\[\]]/", $string, $matches);

// loop through the matches with foreach
foreach($matches[0] as $value)
        {
        echo $value;
        }
?> 