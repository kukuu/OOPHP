<?php
// create a string
$string = '1+1=2';

// try to match our pattern
if(preg_match("/^1\+1/i", $string)){
    // if the pattern matches we echo this
        echo 'The string begins with 1+1';
        }
else {
    // if no match is found we echo this line
        echo 'No match found';
}

?> 