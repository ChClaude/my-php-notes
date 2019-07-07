<?php
// People Array @TODO - Get From DB
$people[] = "Steve";
$people[] = "Moses";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malkolm";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Claude";
$people[] = "Christ";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person"; // append if other occurrence
            }
        }
    }
}

echo $suggestion === ""? "No Suggestion" : $suggestion;