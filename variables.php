<?php
    // Single line comment
    # Single line comment

    /*
     * Multiline
     * comment
     */

    ## VARIABLES
    /*
     *  - Prefix $
     *  - Start with a letter or an underscore
     *  - Only letters, numbers and underscores
     *  - Case sensitive
     */

    # Data types

    /**
     * String
     * Integers
     * floats
     * booleans
     * arrays
     * objects
     * NULL
     * Resource
     */
    $num1 = 5;
    $num2 = 7;

    $result = $num1 + $num2;
    $output = 'Hello World';

    $string1 = "Hello";
    $string2 = " World";

    // concatenate strings
    $greetings = $string1 . $string2 . '!';
    $greeting2 = "$string1 OOO $string2!";

    // Constants
    define('GREETING', 'Hello Everyone');


    echo GREETING;
?>
