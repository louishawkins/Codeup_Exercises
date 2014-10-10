<?php
// the data -- first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// the function
function findName($name, $names) {
	return in_array($name, $names) == false ? 'false' : 'true';
}

// call the function
echo findName('Tina', $names);
echo findName('Mike', $compare);

exit(0);
?>