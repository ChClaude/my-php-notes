<?php
    # FUNCTION - block of code that can be repeatedly called

    /*
     * Camel Case - myFunction()
     * Lower Case - my_function()
     * Pascal Case - MyFunction()
     */

    // create simple function
    function simpleFunction() {
        echo 'Hello World';
    }

    // Run Simple Function
//    simpleFunction();

    // Function with Param
    function sayHello($name = 'World') { // here World is the default if the user does not input anything
        echo "Hello $name <br>";
    }

    /*sayHello('Joe');
    sayHello('Bob');
    sayHello();*/

    // Return Value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

//    echo addNumbers(2, 8);

    // By reference

    $myNum = 10;

    function addFive($num) { // this is pass by value
        $num += 5;
    }

    function addTen(&$num) { // this is pass by reference
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>"; // result 10, it does not manipulate the outside value

    addTen($myNum); // result 10, it does  manipulate the outside value
    echo "Value: $myNum<br>";

