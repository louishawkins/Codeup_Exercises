<?php
// Set the default timezone
date_default_timezone_set('America/Chicago');

//Get Day of the Week as the number
//1 for monday through 7 (sunday)
$dayOfWeek = date('N');

switch($dayOfWeek) {
	case 1:
		//monday
		echo "It's Monday!";
		break;
	case 2:
		//tuesday
		echo "It's Tuesday!";
		break;
	case 3: 
		//wednesday
		echo "It's Wednesday!";
		break;
	case 4:
		//thursday
		echo "It's Thursday!";	
		break;
	case 5:
		//friday
		echo "It's Friday!";
		break;
	case 6:
		//saturday
		echo "It's Saturday!";
		break;
	case 7:
		//sunday
		echo "Sunday.";
		break;
	default:
		echo "ERROR: NO DATE FOUND.\nDid you travel to the end of time?";
		break;
}
echo "\n\n";
exit(0);

?>