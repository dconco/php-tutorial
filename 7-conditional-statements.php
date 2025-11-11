<?php

$x = 5;
$y = 10;

// --- IF Conditional Statement ---
# if ($y <=> $x) {
#    echo "10 is greater than 5";
# }

// --- IF-ELSE Conditional Statement ---
# if ($y > $x && $x < $y - 10) {
#    echo "$y is greater than $x";
# } else if ($y < $x) {
#    echo "$y is not greater than $x";
# } else {
#    echo "This is else block";
# }

// --- SWITCH Conditional Statement ---
$color = "indigo";

switch ($color) {
   case 'red':
      echo 'Your favorite color is red';
      break;
   case 'blue':
      echo 'Your favorite color is blue';
      break;
   case 'green':
      echo 'Your favorite color is green';
      break;
   default:
      echo 'You have provided unknown value';
      break;
}
