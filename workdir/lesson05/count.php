<?php

$number=$argv[1];

$startnumber= 0;
while($number >= $startnumber){
echo $startnumber."\n";
$startnumber = $startnumber + 1; 
}

while ($number >= 0){
   echo $number . "\n";
  $number = $number-1;
}


?>