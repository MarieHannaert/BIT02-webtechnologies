<?php 

    # A while loop will repeatedly execute a block of code as long as a certain condition is true

    ###################
    ## Infinite loop ##
    ###################

    # While the condition is true, the code will continue to run

    while(true){
        echo "This will run forever\n";
    }


    ###############
    ## Increment ##
    ###############

    # As long as the condition is true, the code will continue to run
    # In this case, as long as the counter is less than or equal to 10, the code will continue to run

    $counter = 1;

    while($counter <= 10){
        echo $counter . "\n";
        $counter = $counter + 1; # Increment the counter
    }

    # NOTE: Other ways to increment a variable
    # $counter += 1;
    # $counter++;


    ###############
    ## Decrement ##
    ###############

    # As long as the condition is true, the code will continue to run
    # In this case, as long as the counter is greater than or equal to 1, the code will continue to run

    $counter = 10;

    while($counter >= 1){
        echo $counter . "\n";
        $counter = $counter - 1; # Decrement the counter
    }

    # NOTE: Other ways to decrement a variable
    # $counter -= 1;
    # $counter--;

?>