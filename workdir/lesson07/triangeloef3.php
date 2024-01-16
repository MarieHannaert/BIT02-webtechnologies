<?php

$base = $argv[1] ?? 10;

$maxRows = $base / 2;
for($row=1;$row <= $maxRows;$row++){
    for($space=1;$space <= $maxRows- $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row*2;$ast++){
        echo "*";
    }
    echo "\n";
}

?>