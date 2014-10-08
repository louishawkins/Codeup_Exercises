<?php

function add($a, $b) {
	echo $a + $b . "\n";
}

function subtract($a, $b) {
	echo $a - $b . "\n";
}

function multiply($a, $b) {
	echo $a * $b . "\n";
}

function divide($a, $b) {
	echo $a / $b . "\n";
}
function modulus($a, $b) {
	echo $a % $b . "\n";
}

echo "100%13 is " . 100 % 13 . " & ";
modulus(100, 13);

echo "100/5 is " . 100 / 5 . " & ";
divide(100, 5);

echo "7*10 is " . 7 * 10 . " & ";
multiply(7, 10);

echo "8 - 3 is " . 8 - 3 . " & ";
subtract(8,3);

echo "200 + 30 is " . 200 + 30 . " & ";
add(200, 30);

exit(0);

?>