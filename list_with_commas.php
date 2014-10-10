 <?php

 // Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
 	$array = implode(', ', $array);
    return $array;
}

 // List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);
 

echo "\n// Sort the list alphabetically? (Y/N) ";
$convert_yn = trim(strtoupper(fgets(STDIN)));

switch($convert_yn) {
	case 'Y':
		sort($physicistsArray);
		break;
	case 'N':
		break;
	default:
		break;
}
 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

 exit(0);

 ?>