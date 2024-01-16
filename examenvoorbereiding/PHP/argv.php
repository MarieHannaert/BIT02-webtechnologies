<?php

    # There are some special arrays that are available by default in PHP
    # One of these arrays is the $argv array

    # The $argv array contains all the arguments that are passed to the script ON THE COMMAND LINE when it is executed
    
    # The first element of the $argv array is always the name of the script itself
    # The second element of the $argv array is the first argument that is passed to the script
    # The third element of the $argv array is the second argument that is passed to the script
    # And so on...

    ################################
    ## DISPLAYING THE $argv ARRAY ##
    ################################

    # We can display the $argv array with the print_r() function

    print_r($argv);


    ######################################################
    ## DISPLAYING A SPECIFIC VALUE FROM THE $argv ARRAY ##
    ######################################################

    # We can display a specific value from the $argv array by using the index of the value we want to display

    echo $argv[0] . "\n"; # This will display the first value of the array (the script name)

    
    #####################################
    ## Looping through the $argv array ##
    #####################################

    # We can loop through the $argv array with a foreach loop

    foreach($argv as $argument){
        echo $argument . "\n";
    }
?>