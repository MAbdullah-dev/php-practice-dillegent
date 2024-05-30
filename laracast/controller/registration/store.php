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
       
        $email = '"' . $email . '"';
        $query = "SELECT * FROM `users` WHERE email = $email";
        $stmt = $database->executeQuery($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row['email']) {
            
            header('location: /login');
            exit;
        }else{
            $pass=password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO `users`( `password`, `email`) VALUES ('$pass',$email)";
            print_r($query);
            $stmt = $database->executeQuery($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        $_SESSION['user']=[
            'email'=>$email
        ];
        header("location: /dilgent-tecnogies-internee/laracast/");