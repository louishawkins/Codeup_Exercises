<?php

$days_of_the_week = [
	'Sunday',
	'Monday',
	'Tuesday',
	'Wednesday',
	'Thursday',
	'Friday',
	'Saturday'
];

//set day to 0 (sunday) and pay to zero.
$today = 0; //sunday
$money = 0; //amount of money

// loop till I have 100 dollars
while ($money <= 100) {

	//check if it's friday
	if($days_of_the_week[$today] == 'Friday') {
		$money += 20;
	}
	//echo results
	echo "\n{$days_of_the_week[$today]} :" . PHP_EOL;
	echo "{$money}" . PHP_EOL;
	echo "_________________" . PHP_EOL;

	sleep(0);
	$today++;

	//set to sunday after saturday
	$today = ($today == 7) ? 0 : $today;
}

?>