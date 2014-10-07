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

modulus(100, 13);
divide(100, 5);
multiply(7, 10);
subtract(8,3);
add(200, 30);

exit(0);

?>