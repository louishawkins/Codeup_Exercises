<?php
// Set the default timezone
date_default_timezone_set('America/Chicago');

//Get Day of the Week as the number
//1 for monday through 7 (sunday)
$dayOfWeek = date('N');

switch($dayOfWeek) {
	case 1:
		echo "It's Monday!";
		break;
	case 2:
		echo "It's Tuesday!";
		break;
	case 3: 
		echo "It's Wednesday!";
		break;
	case 4:
		echo "It's Thursday!";	
		break;
	case 5:
		echo "It's Friday!";
		break;
	case 6:
		echo "It's Saturday!";
		break;
	case 7:
		echo "Sunday.";
		break;
	default:
		echo "ERROR: NO DATE FOUND." . PHP_EOL . "Did you travel to the end of time?" . PHP_EOL;
		break;
}

exit(0);

?>