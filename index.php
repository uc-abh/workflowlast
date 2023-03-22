<?php
					 // add two numbers
                                  = 1;
						 $b       = 2;
							   $c = $a + $b;
						 echo $c;
// function to add two numbers
function add( $a, $b ) {
     $c = $a + $b;
     return $c;
}
// function for prime number
function prime( $n ) {
     $flag = 0;
     for ( $i = 2; $i <= $n / 2; $i++ ) {
          if ( $n % $i == 0 ) {
               $flag = 1;
               break;
          }
     }
     if ( $flag == 0 ) {
          return true;
     } else {
          return false;
     }
}
