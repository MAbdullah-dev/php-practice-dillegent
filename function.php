<?php
function registerUser($email){
echo $email.'register';
}
registerUser('abdullah@gmail.com');

function sum($n1,$n2){
    return $n1+$n2;
}
$sum = sum(2,2);
echo $sum;


function sub($n1,$n2){
    return $n1-$n2;
}
$sub = sub(10,5);
echo $sub;

function mul($n1,$n2){
    return $n1*$n2;
}
$mul = mul(10,5);
echo $mul;
?>