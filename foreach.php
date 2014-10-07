<?php

$things = [100, 'Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];

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

exit(0);

?>