<?php
//If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
// Find the sum of all the multiples of 3 or 5 below 1000.
$maxNumber  = range( 0 ,999);
$sum = 0;
foreach( $maxNumber as $max){
    if ($max % 3 == 0 && $max % 5 == 0) {
       echo $max . '<br>';

    }
}

?>