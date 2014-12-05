<?php

$a = 5;
$b = 10;
$c = 25;

// Shorten the next 2 statements into an if/else
if ($a < $b) {
    echo "$a is less than $b\n";
} else{
    echo "$b is greater than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    echo "$b is greater than or equlal to $c\n";
} else {
    echo "$b is less than or equal to $c\n";
}

// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b === $c) {
    echo "$b is equal to $c\n";
} elseif ($b == $c) {
    echo "$b is identical to $c\n";
} else {
    echo "$b is not equal to $c\n";
}

?>
