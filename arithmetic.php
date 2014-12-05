<?php

function add($a, $b) {
	return (int) $a + (int) $b . "\n";
}

function subtract($a, $b) {
	return (int) $a - (int) $b . "\n";
}

function multiply($a, $b) {
	return (int) $a * (int) $b . "\n";
}

function divide($a, $b) {
	return (int) $a / (int) $b . "\n";
}

function modulus($a, $b) {
	return (int) $a % (int) $b . "\n";
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
			if($input[1] == 0) {
				echo "ERROR: DIVIDE BY 0";
			}
			else {
				echo divide((int) $input[0], (int) $input[1]);
			}
			break;

		case 'o':
			$input = getOperands();
			if($input[1] == 0) {
				echo "ERROR: DIVIDE BY 0";	
			}
			else {	
				echo modulus((int) $input[0], (int) $input[1]);
			}
			break;

		default:
			break;
	}
} while ($menu != "q");

exit(0);

?>