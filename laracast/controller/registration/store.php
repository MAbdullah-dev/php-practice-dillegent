<?php require_once 'validator.php'; ?>
<?php require_once 'database.php'; ?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];

$errors=[];
    if (!validator::email($email)) {
        $errors['email']='provide a valide email .';
    }
    if (!validator::string($email,7,255)) {
        $errors['password']='please provide a password at least 7 characters.';
    }
    if (!empty($errors)) {
        return require_once('./views/registration/create.view.php');
    }   
    $query = "SELECT * FROM `users` Where email =Ahmed@gmail.com";
    $stmt = $database->executeQuery($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($query) {
        
        header('location: /login');
        exit;
    }else{
        $query = "INSERT INTO `users`( `password`, `email`) VALUES ($password,$email)";
        $stmt = $database->executeQuery($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    $_SESSION['user']=[
        'email'=>$email
    ];
    header("location: /dilgent-tecnogies-internee/laracast/");