<?php

// Inbuilt Functions

// PHP provides a large number of built-in functions that you can use to perform various tasks. Here are some commonly used inbuilt functions:

// String Functions
# strlen(); // Get string length
# strpos(); // Find position of first occurrence of a substring
# str_replace(); // Replace all occurrences of a substring

// Array Functions
# array_push(); // Add one or more elements to the end of an array
# array_pop(); // Remove the last element from an array
# array_merge(); // Merge one or more arrays

// Mathematical Functions
# abs(); // Get absolute value
# round(); // Round a floating-point number
# rand(); // Generate a random integer

// Variable Functions
# isset(); // Check if a variable is set
# empty(); // Check if a variable is empty

$name = "John Doe";
$length = strlen($name);
$pos = strpos($name, "Doe");

$newName = str_replace('John', 'Dave', $name);

$arr = NULL;

$isNameVarSet = isset($name);

$isNameVarEmpty = empty($arr);

var_dump($isNameVarEmpty);