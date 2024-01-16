<?php

    # A for loop will repeatedly execute a block of code as long as a certain condition is true
    # This is what a for loop looks like: for(initialization; condition; increment/decrement){code to be executed}
    # For a for loop, we need to define a counter variable, a condition, and an increment or decrement of the counter variable


    ##########################################
    ## Print my age as long as I am a minor ##
    ##########################################
    
    #$age = 0;

    for($age = 0; $age < 18; $age += 1){
        echo "My age is: $age\n";
    }

    # What will happen if we execute the code above?
    # The code within the for loop will start with a value of 0
    # During the next iteration of the loop, the value of $age will be incremented by 1
    # This will continue until the value of $age is 18
    # Once the value of $age is 18, the condition of the for loop will be false and the loop will stop executing


    ##########################################
    ## Print my distance from home in miles ##
    ##########################################

    $distance = 15;

    for($distance = 15; $distance >= 0; $distance -= 1){
        echo "I am $distance km from home\n";

        if($distance == 0){
            echo "I am home\n";
        }
    }

    # What will happen if we execute the code above?
    # The code within the for loop will start with a value of 15
    # During the next iteration of the loop, the value of $distance will be decremented by 1
    # This will continue until the value of $distance is -1
    # Once the value of $distance is -1, the condition of the for loop will be false and the loop will stop executing

    

    

?>