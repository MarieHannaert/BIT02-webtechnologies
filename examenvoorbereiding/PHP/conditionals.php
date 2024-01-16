<?php

    # Conditionals are used to make decisions in our code
    # We can use conditionals to check if something is true or false
    # If something is true, we can execute a certain piece of code
    # If something is false, we can execute another piece of code

    ###################
    ## IF STATEMENTS ##
    ###################

    # Example 1: Drinking age
    #########################

    $age = 17;

    # Here we check if the age is smaller than or equal to 18
    # If this is the case (true), we will print "You are not allowed to drink alcohol"

    if($age < 18){      
        echo "You are not allowed to drink alcohol\n";
    }

    # Other operators that we can use in if statements:
        # == : equal to
        # != : not equal to
        # > : greater than
        # < : smaller than
        # >= : greater than or equal to
        # <= : smaller than or equal to


    #####################
    ## ELSE STATEMENTS ##
    #####################

    # Example 2: Odd or even
    ########################

    $number = 2;

    # Here we check if the number is divisible by 2
    # If this is the case (true), we will print "The number is even"
    # If this is not the case (false), we will print "The number is odd"

    if($number % 2 == 0){
        echo "The number $number is even\n";
    }
    else{
        echo "The number $number is odd\n";
    }


    ########################
    ## ELSE IF STATEMENTS ##
    ########################

    # Example 3: Traffic lights

    $light = "orange";

    # Here we check if the light is green
    # If this is the case (true), we will print "You can go"
    # If this is not the case, we will check if the light is orange
    # If this is the case (true), we will print "You can go, but be careful"
    # If this is not the case (false), we will print "You have to stop"

    if($light == "green"){
        echo "You can go\n";
    }
    else if($light == "orange"){
        echo "You can go, but be careful\n";
    }
    else{
        echo "You have to stop\n";
    }


    #####################################
    ## TESTING MULTIPLE THINGS AT ONCE ##
    #####################################

    # Example 4: Alcohol, age and antibiotics

    $age = 18;
    $antiBiotics = false;

    # Only when the person is 18 or older and is not taking antibiotics, we will print "You are allowed to drink alcohol"
    if($age >= 18 and $antiBiotics == false){
        echo "You are allowed to drink alcohol\n";
    }

    # Example 5: Eating fruit
    #########################

    $eatenApple = true;
    $eatenPear = false;

    # Here we check if the person has eaten an apple or a pear
    # Only if both of these are false, we will print "You have not eaten an apple or a pear"

    if($eatenApple == true or $eatenPear == true){
        echo "You have eaten very healthy!\n";
    } else{
        echo "You should eat some fruit!\n";
    }
?>