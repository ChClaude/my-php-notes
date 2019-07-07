<?php
    # CONDITIONALS

    /*
     * == compares values
     * === compares values and data type
     * <
     * >
     * <=
     * >=
     * != not identical values
     * !== not identical
     */

    $num = 3;

    /*if ($num < 2)
        echo '5 passed';
    elseif ($num == 67)
        echo '6 passed';
    else
        echo 'did not pass';
    */
    /*
     * LOGICAL OPERATORS
     *
     * and && : both operands must be true
     * or || : at least one operands must be true
     * xor : only one operands must be true
     */

/*    if ($num > 4 XOR $num < 10)
        echo "$num passed";*/

    # SWITCH

    $favColor = 'blue';

    switch ($favColor) {
        case 'red':
            echo 'Your favorite color is red';
            break;

        case 'blue':
            echo 'Your favorite color is blue';
            break;

        case 'yellow':
            echo 'Your favorite color is yellow';
            break;
        default:
            echo 'You favorite color is something else';
            break;
    }
