<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function findName($name, $names) {
	return in_array($name, $names) == false ? 'false' : 'true';
}

echo findName('Tina', $names);
echo findName('Mike', $compare);

exit(0);
?>