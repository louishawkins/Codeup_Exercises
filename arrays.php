<?php

/*Create an array of numbers, 1-5, using array(), and assign it to a variable. Now var_dump() your variable. Now print_r() your variable.

Repeat #1 using square brackets [] instead of array().

Echo the element with the index of 3 from your array. The value should be 4. Do you see how array indices work?

Create an associative array with keys (first_name, last_name, email, phone) and put a person in this array.

Create a variable $test and make it a multidimensional array with the keys person1, person2, and person3 with your person array from last step, and 2 more people arrays, as values.*/

$arrayNumbers = array(1,2,3,4,5);
$arrayNumbers2 = [1,2,3,4,5];

echo "$arrayNumbers[3]\n";

$arrayInfo = [
	'first_name' => 'Louis',
	'last_name' => 'Hawkins',
	'email' => ["louishawkins@gmail.com", "louishawkins@utexas.edu", "louis.hawkins@utsa.edu"],
	'phone' => ['cell' => '+18309311398', 'home' => '+18309313827', 'office' => '+12103446755']

];



