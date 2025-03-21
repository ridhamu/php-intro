<?php

// contoh dynamic typing
$my_variable = 10; // Integer
echo gettype($my_variable) . "\n"; // Output: integer
$my_variable = "Hello"; // Now a string
echo gettype($my_variable) . "\n"; // Output: string
$my_variable = 3.14; // Now a double (float)
echo gettype($my_variable) . "\n"; // Output: double