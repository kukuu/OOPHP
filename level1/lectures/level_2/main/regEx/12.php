<?php
// create a string
$string = 'sex'."\n".'at'."\n".'noon'."\n".'taxes'."\n";

// echo the string
echo nl2br($string);

// look for a match
echo preg_match_all("/\s/", $string, $matches);

?> 