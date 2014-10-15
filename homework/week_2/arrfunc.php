<?php

/* TASK 1 */

    // Here is an array of strings:

    $arrayOfStrings = [ 'when you are done', 'with This task', 'this should Form', 'A complete sentence', 'with APPROPRIATE punctuation'];

    //  DO NOT MODIFY THE ARRAY OF STRINGS DIRECTLY!  Like, don't go into the above data and start changing 
    // letters and stuff. That's totally cheating, you cheater!

    //  You need to write a function that will accept the above array of input, and output a complete (and readable) sentence.
    // Make sure that the word "When" appears with a capital letter.  Make sure all other letters are lowercase.  
    // Add a period at the end of the sentence.  All words should have only one space between them.

    function grammar($strings) {
        //get the whole array into one string
        $newString = '';
        foreach ($strings as $string) {
            $newString .= $string . ' ';
        }
        $stringLength = strlen($newString);    

        for ($i = 0; $i <= $stringLength; $i++) {
            if ($i == 0) {
                $newString[$i] = strtoupper($newString[$i]);
            }
            elseif ($i > 0 && $i < $stringLength) {
                $newString[$i] = strtolower($newString[$i]);
            }
            elseif ($i == $stringLength) {
                 $newString[$i - 1] = '.';
            }
            else {
                break;
            } 
        }
        return $newString;
    }


    echo "\n ::::::: TASK 1 :::::::\n";

    echo "The original array:";
    print_r($arrayOfStrings);
    echo "Complete sentence: \n" . grammar($arrayOfStrings);
    echo "\n\n";



/* TASK 2 */

    // Write a function that will generate 5 random integers between 1, 100 - returned as an array.
    
    // Assign that array to a variable called $numbers.
    
    // Write another function that will accept the array $numbers and return the minimum and maximum numbers in that array.

    // Can you make these into one function?
echo "\n::::::: TASK 2 :::::::\n";

function randomNumbers() {
    $numbers = [];
    for ($i = 0; $i < 5; $i++) {
        $numbers[] = mt_rand(1,100);
    }
    return $numbers;
}

function minMax($array_of_numbers) {
    sort($array_of_numbers);
    $_minMax[0] = $array_of_numbers[0];
    $_minMax[1] = $array_of_numbers[4];
    return$_minMax;
}

function rnd_min_max(){
    $numbers = [];
    for ($i = 0; $i < 5; $i++) {
        $numbers[] = mt_rand(1,100);
    }
    sort($numbers);
    $_minMax[0] = $numbers[0];
    $_minMax[1] = $numbers[4];
    print_r($numbers);
    return $_minMax;

}

 echo "randomNumbers and minMax test\n";
 $test = randomNumbers();
 print_r($test);
 print_r(minMax($test));

 echo "\n\n ::::: rnd_min_max test :::::\n";
print_r(rnd_min_max());

?>