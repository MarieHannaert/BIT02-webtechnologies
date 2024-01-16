<?php

## Add an item to the end of an array
#####################################

$names = [
    "Mathias"
];

array_push($names, "Verbeke");

print_r($names);


## Add an item to the beginning of an array
############################################

$names = [
    "Mathias"
];

array_unshift($names, "Verbeke");

print_r($names);


## Remove an item from the end of an array
##########################################

$names = [
    "Mathias",
    "Verbeke"
];

array_pop($names);

print_r($names);


## Remove an item from the beginning of an array
################################################

$names = [
    "Mathias",
    "Verbeke"
];

array_shift($names);

print_r($names);


## Remove an item from an array
###############################

$names = [
    "Mathias",
    "Verbeke"
];

unset($names[0]);

print_r($names);
?>