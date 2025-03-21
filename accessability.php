<?php


// variabel global
$global_variable = "I'm a global variable.";

function myFunction()
{
    // variabel local pada myFunction
    $local_variable = "I'm a local variable.";

    // Accessing the global variable inside the function
    global $global_variable;

    echo "Inside myFunction(): \n";
    echo "Local variable: " . $local_variable . "\n";
    echo "Global variable: " . $global_variable . "\n";

    // Modifying the global variable inside the function
    $global_variable = "Global variable modified inside the function.";
    echo "Global variable (after modification): " . $global_variable . "\n";
}

myFunction();

echo "\nOutside myFunction():\n";
echo "Global variable: " . $global_variable . "\n";

// Another example demonstrating modifying a global variable
$another_global = 10;

function modifyGlobal()
{
    global $another_global;
    $another_global = $another_global + 5;
}

modifyGlobal();
echo "\nAnother Global: " . $another_global . "\n"; // Output: 15

// Example of a function that creates a global variable
function createGlobal()
{
    $GLOBALS['new_global'] = "A new global variable created by the function.";
}

createGlobal();
echo $GLOBALS['new_global'] . "<br>";

