<?php
header('Content-Type: text/plain');

$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas tuxas";
$statesArray = [];
$states1 = explode(' ', $allTheStates);
$i = 0;

// States that end in "xas"
foreach ($states1 as $state) {
    if (preg_match('/xas$/', $state)) {
        $statesArray[$i] = $state;
        $i++;
        echo "\nThe states that end in xas: " . $state;
    }
}

// States that begin with "k" and end in "s"
foreach ($states1 as $state) {
    if (preg_match('/^k.*s$/i', $state)) {
        $statesArray[$i] = $state;
        $i++;
        echo "\nThe states that begin with k and end in s: " . $state;
    }
}

// States that begin with "M" and end in "s"
foreach ($states1 as $state) {
    if (preg_match('/^M.*s$/', $state)) {
        $statesArray[$i] = $state;
        $i++;
        echo "\nThe states that begin with M and end in s: " . $state;
    }
}

// States that end in "a"
foreach ($states1 as $state) {
    if (preg_match('/a$/', $state)) {
        $statesArray[$i] = $state;
        $i++;
        echo "\nThe states that end in a: " . $state;
    }
}

foreach ($statesArray as $element => $value) {
    echo "\n" . $value . " is the element " . $element;
}
?>
