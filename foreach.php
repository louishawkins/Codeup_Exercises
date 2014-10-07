<?php

echo `clear`;

$things = [100, 'Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];

//Echo out every item in the array
echo "This is what is in the array \$things:\n\n";

foreach ($things as $item){
	echo "[$item] ";
}
//Loop that indicates the type of data each item in the array is.
echo "\n\nArray items data types: \n\n\n";

foreach ($things as $item){

	if (is_integer($item) == true) {
		echo "$item: INTEGER\n";
	}
	elseif (is_float($item) == true) {
		echo "$item: FLOAT\n";
	}	
	//is_bool();
	elseif (is_bool($item) == true) {
		echo "$item: BOOLEAN\n";
	}
	//is_array();
	elseif (is_array($item) == true) {
		echo "$item: ARRAY\n";
	}

	//is_string();
	elseif (is_string($item) == true) {
		echo "$item: STRING\n";
	}

	//is_null();
	elseif (is_null($item) == true) {
		echo "$item: NULL\n";
	}	
}

//Output only items that are SCALAR.
echo "\n\nThese are the SCALAR items in the array: \n\n";

foreach ($things as $item){
	if (is_scalar($item) == true) {
		echo "$item is a SCALAR\n";
	}




}

exit(0);

?>