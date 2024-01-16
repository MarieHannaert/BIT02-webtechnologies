<?php
$person = [
    "firstname"=> "Mathias",
    "lastname"=> "verbeken",
    "age"=> 23
];

$person["school"] = "Howest";
$person[] = "foert";

$person["age"] += 1;

print_r($person);

?> 