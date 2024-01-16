<?php

    ###########
    ## ISSET ##
    ###########

    # With the isset() function, we can check whether or not a specified variable exists

    ## isset() 
    ##########

    # checks if a variable exists

    if(isset($argv[1])){
        echo("Some arguments were given on the command line!");
    }


    ## !isset() 
    ###########

    # checks if a variable does not exist

    if(!isset($argv[1])){
        echo("No command line arguments were specified on the command line.\n");
    }


    ##########################
    ## TERMINATING A SCRIPT ##
    ##########################

    # If you want to terminate the script, there are 2 ways to do this

    ## Die
    ######

    # Let's assume that we want to stop the script due to the fact that $argv[1] does not exist

    if(!isset($argv[1])){
        die("Error: No command line arguments were specified on the command line.\n");
    }


    ## Exit
    #######

    # Let's assume that we want to stop the script due to the fact that $argv[1] does not exist

    if(!isset($argv[1])){
        exit("Error: No command line arguments were specified on the command line\n"); 
    }


    #############################
    ## ASSIGNING DEFAULT VALUE ##
    #############################

    # Imagine that we want to run a script that needs you to specify a number on the command line.
    # Even when you don't specify a number on the command line, you want the script to execute with a default numeric value.

    # We could do this:

    if(!isset($argv[1])){
        $number = 10;
    } else{
        $number = $argv[1];
    }

    # We could also do this:
    $number = $argv[1] ?? 10;

?>