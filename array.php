<?php
$number=[1,2,55,55,45];
$fruits=['apples','banana','orange','pear'];

// print_r($fruits);
// var_dump($number);
// var_dump($fruits);
// echo $fruits[1];

// Associative array
$colours=[
1=>'red',
4=>'blue',
6=>'green'
];
// print_r($colours);
// echo $colours[4];

$person=[
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'abdullahdev077@gmail.com'
];
// echo $person['first_name'];

$peoples=[
    [
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'abdullahdev077@gmail.com'
    ],
    [
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'ali'
    ],
    [
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'scdcd@gmail.com'
    ],
    [
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'cdc@gmail.com'
    ],
    [
    'first_name'=>'Muhammed',
    'last_name'=>'Abdullah',
    'email'=>'dedsvsv@gmail.com'
    ],

];

// echo $peoples[2]['email'] ;
var_dump(json_encode($peoples));