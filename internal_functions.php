<?php

function set_or_empty($var) {
	
	switch(isset($var)) {

		case true:
			echo "SET\n";
			break;
		case false:
			break;
	}

	switch(empty($var)) {

		case true:
			echo "EMPTY\n";
			break;
		case false:
			break;
	}
}

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

echo "\$nothing is ";
set_or_empty($nothing);
echo "\$something is ";
set_or_empty($something);

// Serialize the array $array, and output the results

$serializedArray = serialize($array);
echo $serializedArray;

// Unserialize the array $array, and output the results
$unserializedArray = unserialize($serializedArray);
echo "\n";
foreach($unserializedArray as $i) {
	echo "[$i]";
}
exit(0);

?>