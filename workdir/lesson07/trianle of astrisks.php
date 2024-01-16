<?php
    $base = $argv[1];

    for($row = 1; $row <= $base; $row += 1){
        for($ast = 0; $ast < $row; $ast += 1){
            echo "*";
        }
        
        echo "\n";
    }
?>
