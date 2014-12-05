<?php

echo "\n\n";

//Assignment Operators
echo "Assignment Operators Output:" . PHP_EOL;

$number = 10;
echo "echoing \$number: $number" . PHP_EOL;

$number *= 3;
echo "echoing \$number*3: $number" . PHP_EOL;

$item1 = 5;
echo "echoing \$item1: $item1" . PHP_EOL;

$item2 = $item1;
echo "echoing \$item2 = item1: $item2" . PHP_EOL;

$item2 = &$item1;
$item1 = 39;

echo "item1 = $item1\nitem2 = $item2" . PHP_EOL;

echo "\n\n";

//Comparison Operators
echo "Comparision Operators Output:" . PHP_EOL;

var_dump('test' == 'test');

var_dump('test' == 'Test');

var_dump(100 > 5);

var_dump('25' === 25);

var_dump('25' !== 25);

echo "\n\n";

// Incrementing and Decrementing
echo "Incrementing and Decrementing Output:" . PHP_EOL;

$a = 10;

echo ++$a;

echo $a++;

echo $a;

$b = 20;

echo --$b;

echo $b--;

echo $b;

echo "\n\n";

// Logical Operators

echo "Logical Operators Output: \n";

$x = 0; 
$y = 5; 
$z = 10;

var_dump($x < $y && $y < $z);
var_dump($x > $y && $y < $z);
var_dump($x > $y || $y < $z);
var_dump($x > $y || !($y < $z));

echo "\n\n";

