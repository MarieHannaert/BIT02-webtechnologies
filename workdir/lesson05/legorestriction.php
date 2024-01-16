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