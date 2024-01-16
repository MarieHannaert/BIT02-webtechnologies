<?php
echo "Hello world \n";
?>
<?php
$A = "Hallo";
$B = 3.14;
$C = 1;
$D = true;
var_dump($A, $B, $C, $D);
?>
<?php

$array = [1,2,3];

print_r($array);

$array[] = 'hello';

print_r($array);
?>
<?php

$array = [
   "value1",
   "value2",
   "value3",
   100 => "hundred",
   'key' => "value",
];

print_r($array);

$array['key'] = "new value for key";

$array[1] = 'index 1 now points here';

print_r($array);
?>
<?php
$input = $argv[1];
for($input; $input < 10; $input+=2){
    print_r($input);
    echo "\n";
}
?>
<?php
if(isset($argv[1])){
    $result = $argv[1] + $argv[2];
    echo $result;
    echo "\n";
}
else {
    echo "there was no input\n";
}
?>
<?php

if(!isset($argv[1])){
    exit("error");
}

$builderage = $argv[1];

if ($builderage > 99){
    echo "you're to old to play with this!";
}
else if ($builderage < 4){
    echo "this child is to young to play with this!!";
}

else {
    echo "have fun with playing with this!!";
}
?>
<?php

$number = $argv[1];

while($number > 0){


    if ($number > 9){
        echo "the number is bigger than 9\n";
    }
    else if ($number == 9){
        echo "the number is equal to 9\n";
    }
    else if ($number >3 and $number <9){
        echo "the number is between 3 and 9\n";
    }
    else if ($number == 3){
        echo "the number is equal to 3\n";
    }
    else {
        echo "the number is smaller than 3\n";
    }

    if ($number%9==0 and $number%3==0 ){
        echo "the number is divisible by 9 and 3\n";
    }
    else if($number%9==0 or $number%3==0){
        echo "the number is divisible by 9 or 3\n";
    }
    else {
        echo "the number can not be divided\n";
    }
    $number = $number-1;

}
?>
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


