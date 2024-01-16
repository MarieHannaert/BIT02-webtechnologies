<?php

    $base = $argv[1] ?? 10;
    for($row=1;$row <= $base;$row++){
        for($space=1;$space <= $base - $row;$space++){
            echo " ";
        }
        for($ast=1; $ast<=$row;$ast++){
            echo "*";
        }
        echo "\n";
    }