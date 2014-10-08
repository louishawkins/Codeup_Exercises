<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return (int) $a + (int) $b . "\n";
	}
	else {
		errorNonnumeric($a, $b);
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return (int) $a - (int) $b . "\n";
	}
	else {
		errorNonnumeric($a, $b);
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return (int) $a * (int) $b . "\n";
	}
	else {
		errorNonnumeric($a, $b);
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0){
			return (int) $a / (int) $b . "\n";
		}
		else {
			errorDividezero($a, $b);
		}
	}
	else {
		errorNonnumeric($a, $b);
	}
}
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			return (int) $a % (int) $b . "\n";
		}
		else {
			errorDividezero($a, $b);
		}
	}
	else {
		errorNonnumeric($a, $b);
	}
}

function errorNonnumeric($a, $b) {
		echo "ERROR: Both arguments must be numbers\n";
		echo is_numeric($a) ? null : '$a';
		echo is_numeric($b) ? null : $b;
		return null;
}

function errorDividezero($a, $b) {
		echo "ERROR: Divide by 0 -- $a % $b";
		return false;
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