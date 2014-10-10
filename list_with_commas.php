 <?php

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 		$array = implode(', ', $array);
 		return $array;
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

echo "// Convert the string into an array //\n";
 print_r($physicistsArray);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

 exit(0);

 ?>