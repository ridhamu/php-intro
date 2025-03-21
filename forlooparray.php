<?php

$fruits = ["apple", "banana", "orange"];
$count = count($fruits);

echo "\n " . "======== this is foorloop ========" . "\n";
for ($i = 0; $i < $count; $i++) {
    echo $fruits[$i] . "\n";
}
echo " " . "======== this is foorloop ========" . "\n";


echo "\n " . "======== this is foreach ========" . "\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
echo " " . "======== this is foreach ========" . "\n";


echo "\n " . "======== this is whileloop ========" . "\n";
$i = 0;
while ($i < $count) {
    echo $fruits[$i] . "\n";
    $i++;
}
echo " " . "======== this is whileloop ========" . "\n";

echo "\n " . "======== array_walk() ========" . "\n";
function convertToUppercase($value, $key) {
    echo "Index $key: " . strtoupper($value) . "\n";
}

array_walk($fruits, "convertToUppercase");
echo " " . "======== array_walk() ========" . "\n";