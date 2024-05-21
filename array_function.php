<?php
// $colors = ["red", "blue", "green", "yellow", "purple"];
//  echo count($colors);

//  var_dump(in_array('voilet',$colors));
//  $colors[]='voilet';
//  array_push($colors, 'mango', 'raspberry');
//  array_unshift($colors, 'green');
 
//  array_pop($colors);
 
//  array_shift($colors); 
//  unset($colors[3]);
//  $chunkedArray = array_chunk($colors, 2);
//  print_r($chunkedArray);

//  $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];
// $arr3 = array_merge($arr1, $arr2);
// print_r($arr3);


// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);
// $keys = array_keys($c);
// print_r($keys);

// $flipped = array_flip($c);
// print_r($flipped);
$numbers = range(1, 20);
// print_r($numbers);

// Map through array
// $newNumbers = array_map(function ($number) {
//     return "Number ${number}";
//   }, $numbers);

// $lessThan10 = array_filter($numbers, fn($number) => $number < 5);

//   var_dump($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);