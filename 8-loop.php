<?php 

$i = 3;

// --- WHILE Loop ---
// while ($x < 6) {
//    if ($x === 4) {
//       $x++;
//       continue;
//    }

//    echo $x;
//    $x++;
// }

// while ($x < 6):
//    echo $x;
//    $x++;
// endwhile;

// if ($x === 1):
//    echo "X is equal to 1";
// endif;

// --- DO-WHILE Loop ---

// do {
//    echo $i;
//    $i++;
// } while ($i < 6);

// do {
//    if ($i == 3) break;
//    echo $i;
//    $i++;
// } while ($i < 6);

// --- FOR LOOP ---

// for (expression1, expression2, expression3) {
//    // code block
// }

// for ($x = 0; $x <= 10; $x++) {
//    echo "The number is: $x\n";
// }

// for ($x = 0; $x <= 10; $x++) {
//    if ($x === 3) break;
//    echo "The number is: $x\n";
// }

$colors = ['red', 'green', 'blue'];

// foreach ($colors as $index => $value) {
//    echo $colors[$index];
// }

// foreach ($colors as $index => $value):
//    echo $colors[$index] . "\n";
// endforeach;

$users = ['dconco' => 'dave', 'john' => 'john doe'];

foreach ($users as $username => $value) {
   echo "Your Username: $username; Your Fullname: $value\n";
}