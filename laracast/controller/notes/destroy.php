<?php require_once 'database.php'; ?>
<?php
// dd($_SERVER);
$heading='note';
require './views/notes/show.view.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    dd($_POST);
    $note= $_POST['id'];
    $query = "DELETE FROM `laracasts note app` WHERE id=$id"; // Correct 
    $stmt = $database->executeQuery($query);

}
header('location: /notes');
exit();