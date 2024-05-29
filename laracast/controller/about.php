<?php
function dd($value){
        echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}   
// print_r($_SESSION['name']);
dd($_SESSION['name']);

$heading='about us';


require 'views/about.vu.php';