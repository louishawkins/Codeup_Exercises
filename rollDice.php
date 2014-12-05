<?php

$numberRolls = $argv[1];

define ('SIDES_OF_DICE', 6);

while($numberRolls > 0){

	$roll = mt_rand(1, SIDES_OF_DICE);

	echo "You rolled {$roll}" . PHP_EOL;

	$numberRolls --;
}

?>