<?php
    # LOOPS - executes code a set number of times
    /*
     * For
     * While
     * Do...while
     * Foreach
     */

    # for loop
    # params - inti, condition, increment

    /*for ($i = 0; $i < 10; $i++) {
        echo "Number $i"; // different from 'Number $i'
        echo "<br>";
    }*/

//    $i = 0;

    /*while ($i <= 10) {
        echo 'Number: ' . $i;
        echo '<br>';
        $i++;
    }*/

    /*echo "Using do while loop <br>";
    do {
        echo 'Number: ' . $i;
        echo '<br>';
        $i++;
    } while($i < 10);*/

    /*$people = ['Moses', 'Dimitri', 'Mbappe'];

    foreach ($people as $person) {
        echo "$person <br>";
    }*/

    # Looping through an associative array
    $people = ['Moses' => 'moses@gmail.com', 'Dimitri' => 'dimitri@gmail.com', 'Mbappe' => 'mbappe@gmail.com'];

    foreach ($people as $person => $email) {
        echo "$person: $email <br>";
    }