<?php require_once 'database.php'; ?>
<?php require_once 'validator.php'; ; ?>

<?php


$id = $_POST['id'];
// Validate if ID is provided and numeric
if (!isset($id) || !is_numeric($id)) {
    echo "<p class='text-red-500'>Invalid ID provided.</p>";
} else {
    $query = "SELECT * FROM `laracasts note app` WHERE user_id = 1 AND id = $id"; // Correct table name if necessary
    $stmt = $database->executeQuery($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
if (!validator::string($_POST['note'], 1, 1000)) {
    $errors['note'] = 'A note not more than 1000 characters and it is required';
}
if (!empty($errors)) {
    $heading = 'Edit note';
    require './views/notes/edit.view.php';
    exit; //
}
$note=$_POST['note'];
if (empty($errors)) {
    $query = "UPDATE `laracasts note app` SET `body`='$note',`user_id`=1 WHERE id=$id";
    $stmt = $database->executeQuery($query);
}
header('location: /dilgent-tecnogies-internee/laracast/notes');
exit;