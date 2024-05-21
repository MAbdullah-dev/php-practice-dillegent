<!-- 
variables...................
 string -series of character
integer- whole number
float -decimalnumbers
Bollean -true and false
Array  special variables that can hold more than 1 value

object -A class
null Empty variable
Resourse special variable taht hold the resousrce -->

<!-- Rules for writing a variables -->
<!-- Every variable in PHP must begin with a $ symbol. -->
<!-- After the $, the variable name must start with a letter (a-z, A-Z) or an underscore (_). -->
<!--cannot start with a number  -->
<!--varaible ar case sensitive  -->
<?php
$name='Abdullah';
$age=19;
$skill='web developer';
$has_job=false;
echo $name;
// var_dump($has_job);

// concatination
// echo 'my name is '.$name.'and age is '.$age.'skill is'.$skill;
// echo "my name is ${name} and age is ${age} and skill is ${skill}";
$x=5*5;
// var_dump($x);
echo 10-5;
echo 10*5;
echo 10/5;
echo 10+5;
