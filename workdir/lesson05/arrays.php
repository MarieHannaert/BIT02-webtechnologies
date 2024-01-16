<?php

$name = "mathias verbeken";

$BITStudent = array("Erik","Omar","Aline","lise");

$BITStudent = [
    "student1" => "Erik",
    "student2"=>"Omar",
    "student3"=>"Aline",
    "student4"=>"Lise",

];

print_r($BITStudent);

echo $BITStudent["student1"];
echo $BITStudent["student2"];

foreach($BITStudent as $key => $student){
    echo " $key is $student\n";
}





$fruits = ["apple", "pear" , "banana"];

#add value to the end of an array
array_push($fruits, "Mango");

#add a value to the beginning of a array

array_unshift($fruits, "strawberry");

print_r($fruits);

#remove item from the end

array_pop($fruits);

array_shift($fruits);

unset($fruits[1]);

print_r($fruits);

print_r($argv); #can be use to specify something in the commandline 

print_r("Hello $argv[1]")
?>