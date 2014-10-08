<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo (int) $a + (int) $b . "\n";
	}
	else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo (int) $a - (int) $b . "\n";
	}
	else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo (int) $a * (int) $b . "\n";
	}
	else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0){
			echo "ERROR: Divide by 0 -- $a / $b";
		}
		else {
			echo (int) $a / (int) $b . "\n";
		}
	}
	else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo (int) $a % (int) $b . "\n";
		}
		else {
			echo "ERROR: Divide by 0 -- $a % $b";
		}
	}
	else {
		echo "ERROR: Both arguments must be numbers\n";
	}
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

echo "\n\nERROR TESTING :: \n\n";
echo "29 / 0 is ";
divide(29, 0);
echo "\n60 % 0 is ";
modulus(60, 0);
echo "\n50 + bananas ";
add(50, "bananas");

exit(0);

?>