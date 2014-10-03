<?php

$count = 2;

do {
	echo "$count\n";
	$count = $count * $count;
} while ($count <= 1000000);	
