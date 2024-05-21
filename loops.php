<?php
// for ($i=0; $i <=10 ; $i++) { 
//     echo 'number'.$i.'<br>';
// }

// $a=0;
// while ($a <= 10) {
//     echo 'number'.$a.'<br>';
//     $a++;
// }
// $a=0;
// do {
//     echo 'number' . $a .'<br>';
//     $a++;
// } while ($a <= 10);


$colors = array("red", "blue", "green", "yellow", "purple");
// for ($i=0; $i <count($colors) ; $i++) { 
//     echo $colors[$i];
// }
foreach ($colors as $key => $value) {
    echo $key.'-'. $value;
}