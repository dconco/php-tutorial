<?php

'+'; // Addition
'-'; // Subtraction
'*'; // Multiplication
'/'; // Division
'%'; // Modulus
'='; // Assignment sign
'**'; // Exponential symbol

$x = 2;
$y = 4;

// $z = $x + $y;
// $z = $y - $x;
// $z = $x * $y;
// $z = $y / $x;
// $z = $y % $x;
// $z = $x ** $y;

$x += $y; // $x = $x + $y
$x -= $y; // $x = $x - $y
$x *= $y; // $x = $x * $y
$x /= $y; // $x = $x / $y
$x %= $y; // $x = $x % $y
$x **= $y; // $x = $x ** $y

'=='; // Equality operator
'==='; // Identical operator. 
'!='; // Not equal operator
'!=='; // Not identical operator
'<'; // Less than operator
'>'; // Greater than operator
'<>'; // Not equal operator
'<='; // Less than or equal to operator
'>='; // Greater than or equal to operator
'<=>'; // Spaceship operator

$x = 3;
$y = 4;

// $z = ($x == $y);
// $z = ($x === $y);
// $z = ($x != $y);
// $z = ($x !== $y);
// $z = ($x <> $y);
$z = ($x <=> $y);

var_dump($z);