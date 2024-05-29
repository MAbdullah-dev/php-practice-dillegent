<?php 
require_once 'database.php'; 
require_once 'validator.php'; 

$errors = [];
$note = $_POST['note'];

if (!validator::string($note, 1, 1000)) {
    $errors['note'] = 'A note not more than 1000 characters and it is required';
}

if (!empty($errors)) {
    $heading = 'Home';
    require './views/notes/create.view.php';
    exit; // Ensure script stops here if there are errors
}

if (empty($errors)) {
    $query = "INSERT INTO `laracasts note app`(`body`, `user_id`) VALUES ('$note', '1')";
    $stmt = $database->executeQuery($query);
}

header('Location: /dilgent-tecnogies-internee/laracast/notes');
exit; // Ensure the script stops after redirecting
?>
