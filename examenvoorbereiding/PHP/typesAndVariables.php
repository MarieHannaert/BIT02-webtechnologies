<?php

    ###############
    ## VARIABLES ##
    ###############

    # We can store information in variables
    $course = "WebTech";  # Variables are boxes that store some information and always start with a '$' sign

    # NOTE: The name of a variable can only contain letters (lowercase and uppercase), numbers and underscores and can not start with a number (i.e. $1course is not a valid variable name)
   

    #######################
    ## SCALAR DATA TYPES ##
    #######################

    # We have a few simple data types: integer, float, string and boolean
    # We can store these in variables

    $course = "WebTech"; # String
    $year = 2020; # Integer
    $pi = 3.14; # Float
    $tired = true; # Boolean (true or false)

    # With these data types, we can do almost anything we want


    ######################################
    ## Printing variables to the screen ##
    ######################################

    # We can print variables to the screen
    echo $course; # This will print "WebTech"
    echo $year; # This will print "2020"

    # We can also print multiple variables to the screen


    #######################
    ## COMBINING STRINGS ##
    #######################

    # String concatenation
    ######################

    # We can combine strings by concatenating them
    $firstName = "Mathias";
    $lastName = "Verbeke";

    # We can concatenate strings with the '.' operator
    $fullName = $firstName . " " . $lastName; # This will result in "Mathias Verbeke"

    # If we print this to the screen, we will get "Mathias Verbeke"
    echo $fullName;


    # String interpolation
    ######################

    # We can also combine strings by interpolating them
    $firstName = "Mathias";
    $lastName = "Verbeke";

    # We can interpolate strings by using double quotes
    echo "$firstName $lastName"; # This will result in "Mathias Verbeke"

    # NOTE: We can not interpolate strings with single quotes
    echo '$firstName $lastName'; # This will result in "$firstName $lastName"


    #######################
    ## Escape characters ##
    #######################

    # Newlines: used to create a new line
    echo "Hello World!\n";

    # Tabs: used to create a tab
    echo "\tHello World!\n";

    # Quotes: used to escape quotes
    echo "Hello \"World\"!\n";

    # Backslashes: used to escape backslashes or other special characters
    echo "Hello \\World!\n";
    echo "\$fullName = $fullName\n";


    ##########################
    ## Inspecting variables ##
    ##########################

    # We can inspect variables by using the var_dump() function
    var_dump($course); # This will print "string(7) "WebTech"", meaning that $course is a string with a length of 7 characters
    var_dump($year); # This will print "int(2020)", meaning that $year is an integer with a value of 2020
    var_dump($pi); # This will print "float(3.14)", meaning that $pi is a float with a value of 3.14
    var_dump($tired); # This will print "bool(true)", meaning that $tired is a boolean with a value of true


    ##############################
    ## Mathemathical operations ##
    ##############################

    # Basics
    ########

    # We can do mathemathical operations with integers and floats
    $result = 1 + 1; # This will result in $result having the value 2

    echo $result . "\n"; # This will print "2"

    # We can also do mathemathical operations with variables
    $number1 = 1;
    $number2 = 2;

    $result = $number1 + $number2; # This will result in $result having the value 3

    echo $result . "\n"; # This will print "3"

    # But we don't have to store the result in a variable
    echo 1 + 1 . "\n"; # This will print "2"
    echo $number1 + $number2 . "\n"; # This will print "3"


    # Different operators
    #####################

    # Addition
    echo 1 + 1 . "\n"; # This will print "2"

    # Subtraction
    echo 1 - 1 . "\n"; # This will print "0"

    # Multiplication
    echo 2 * 2 . "\n"; # This will print "4"

    # Division
    echo 4 / 2 . "\n"; # This will print "2"

    # Modulo
    echo 5 % 2 . "\n"; # This will print "1"

    # Exponentiation
    echo 2 ** 3 . "\n"; # This will print "8"

    # Root
    echo 4 ** (1/2) . "\n"; # This will print "2"
    echo sqrt(4) . "\n"; # This will print "2" as well

?>