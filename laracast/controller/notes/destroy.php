<?php require_once 'database.php'; 

?>
<?php

$id=$_POST['id'];

// var_dump($note);
    $query = "DELETE FROM `laracasts note app` WHERE user_id=1 AND id=$id"; // Correct 
    $stmt = $database->executeQuery($query);


header('location: /dilgent-tecnogies-internee/laracast/notes');
exit();