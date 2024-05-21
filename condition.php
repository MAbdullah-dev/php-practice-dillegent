<?php
// $age=19;
// if ($age>=18){
//     echo 'you are old enough to vote';
// }else{
//     echo 'sorry, you are not old enough to vote';
// }

// $st=date("l jS \of F Y h:i:s A");
// echo $st;

$post=['first_post'];
// if (!empty($post)) {
//     echo $post[0];
// }
// else{
//     echo 'no record';
// }
// $firstPost=$post[0] ?? null;
// echo $firstPost;
$colour='voilet';
switch ($colour) {
    case 'white':
        echo 'your favourite colour is white';
        break;
    case 'red':
        echo 'your favourite colour is red';
        break;
    case 'green':
        echo 'your favourite colour is green';
        break;   
    default:
        echo'your favourite colour is not white,red,green';
        break;
}
?>