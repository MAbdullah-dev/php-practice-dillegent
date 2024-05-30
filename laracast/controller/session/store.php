<?php require_once 'database.php'; ?>
<?php require_once 'validator.php'; ?>
<?php
// echo "12356";
 $email=$_POST['email'];
 $password=$_POST['password'];

 $errors=[];
        if (!validator::email($email)) {
            $errors['email']='provide a valide email .';
        }
        if (!validator::string($email,7,255)) {
            $errors['password']='please provide a valid password';
        }
        if (!empty($errors)) {
            return require_once('./views/session/create.view.php');
}
$email = '"' . $email . '"';
$query = "SELECT * FROM `users` WHERE email = $email";
$stmt = $database->executeQuery($query);
$row = $stmt->fetch(PDO::FETCH_ASSOC);   
if (!$row['email']) {
    return require "./views/session/create.view.php";
   [ 'error'=>"no matching account for thi email"];
}
if (password_verify($password,$row['password'])) {
    # code...
}