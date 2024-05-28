<?php require_once 'database.php'; ?>
<?php require_once 'validator.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') : ?>

<?php

// dd($_POST);/
$errors=[];
$note= $_POST['note'];

if (!validator::string($note,1,1000)) {
    $errors['note']='A note not more than 1000 characters and it is required';
}
// if (strlen($note)>1000) {
//     $errors['note']='the can not be more than 1000';
// }


?>
 <?php
 if (empty($errors)) {
    # code...
    $query = "INSERT INTO `laracasts note app`(`body`, `user_id`) VALUES ('$note','1')"; // Correct 
    $stmt = $database->executeQuery($query);
 } 
?>
    
<?php endif ?>
<?php
$heading='Home';
require './views/notes/create.view.php';