<?php

function addNumbers($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}

$result = addNumbers(5, 3);
echo "The sum is: " . $result . "\n"; // Output: The sum is: 8

$anotherResult = addNumbers(10, 20);
echo "Another sum is: " . $anotherResult . "\n"; // Output: Another sum is: 30

// Example with no parameters and no return value
function greet($name)
{
    echo "Hello there ".$name. "!\n";
}

greet("ridha"); // Output: Hello there!

// Example with default parameter value
function greetPerson($name = "Guest")
{
    echo "Hello, " . $name . "!\n";
}

greetPerson();        // Output: Hello, Guest!
greetPerson("Alice");   // Output: Hello, Alice!

