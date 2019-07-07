<?php
    # Array - Variable that holds multiple values

    /*
    * - Indexed array
    * - Associative array
    * - Multi-dimensional array
    */

    // Indexed arrays
    $people = array('Kevin', 'Jeremy', 'Sara');
    //echo $people[0]; // result Kevin

    # another the way to create an array
    $ids = [12, 55, 64, 87];
//    echo $ids[3]; // result 87

    # adding to an existing array
    $cars = ['Honda', 'Toyota', 'Ford'] ;
    $cars[3] = 'Chevy'; // you could add in this way when you know the index
    $cars[] = 'BMW'; // you could also use this way to add
//    echo $cars[4]; // result BMW

    # count function returns the number of elements in the array
//    echo count($cars);

    # printing the array
//    print_r($cars);
//    var_dump($cars); // this prints the array with more details than print_r [note: you can use var_dump with variables as well]

    // Associative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); // associative arrays allow you to set the key (required to access the value) to whatever datatype
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

//    echo $people['William']; // results 37
//    echo $ids[22];

    // adding to an associative array
    $people['Jill'] = 42;
//    echo $people['Jill'];
//    print_r($people);
//    var_dump($people);

    // Multi-dimensional array
    $cars = array(
        array('Audi', 20, 10),
        array('Toyota', 30, 70),
        array('Ford', 90, 64),
        array('Kia', 81, 40)
    );

    echo $cars[1][2];





