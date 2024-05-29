<?php require_once 'database.php'; ?>
<?php
// dd($_SERVER);

$id = $_GET['id'];
// Validate if ID is provided and numeric
if (!isset($id) || !is_numeric($id)) {
    echo "<p class='text-red-500'>Invalid ID provided.</p>";
} else {
    $query = "SELECT * FROM `laracasts note app` WHERE user_id = 1 AND id = $id"; // Correct table name if necessary
    $stmt = $database->executeQuery($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if row exists and user_id is authorized    
    if ($row) {
        
    } else {
        echo "<p class='text-red-500'>No data found for the provided ID.</p>";
    }
}
$heading='edit note';
require './views/notes/edit.view.php';
$note=$row['body'];