<?php



$base = $argv[1] ?? 10;


for($row = $base; $row >= 1; $row --){
    for($ast = 0; $ast < $row; $ast += 1){
        echo "*";
    }
    
    echo "\n";
}


for($row=$base;$row >= 1;$row--){
    for($space=1;$space <= $base - $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row;$ast++){
        echo "*";
    }
    echo "\n";
}

$maxRows = $base / 2;
for($row=$maxRows;$row >=1;$row--){
    for($space=1;$space <= $maxRows- $row;$space++){
        echo " ";
    }
    for($ast=1; $ast<=$row*2;$ast++){
        echo "*";
    }
    echo "\n";
}

?>