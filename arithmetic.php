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
		echo is_numeric($a) ? null : $a;
		echo is_numeric($b) ? null : $b;
		return null;
}

function errorDividezero($a, $b) {
		echo "ERROR: Divide by 0 -- $a % $b";
		return false;
}

function getOperands() {
			echo "\n>";
			$a = fgets(STDIN);
			echo ">";
			$b = fgets(STDIN);
			echo "\n";
			$result = [$a, $b];
			return $result;
}

echo `clear`;
echo "************************************************************\n";
echo "Do arithmetic on two integers.\n";
echo "************************************************************\n";

do{
	fwrite(STDOUT, "\n(A)dd  (S)ubtract  (M)ultiply  (D)ivide  m(O)dulus  (Q)uit\n\n> ");
	$menu = trim(strtolower(fgets(STDIN)));

	switch ($menu) {
		case 'a':
			$input = getOperands();
			echo add((int) $input[0], (int) $input[1]);
			break;
		case 's':
			$input = getOperands();
			echo subtract((int) $input[0], (int) $input[1]);
			break;
		case 'm':
			$input = getOperands();
			echo multiply((int) $input[0], (int) $input[1]);
			break;
		case 'd':
			$input = getOperands();
			echo divide((int) $input[0], (int) $input[1]);
			break;
		case 'o':
			$input = getOperands();
			echo modulus((int) $input[0], (int) $input[1]);
			break;
		default:
			break;
	}


} while ($menu != "q");

exit(0);

?>