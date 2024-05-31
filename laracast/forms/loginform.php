<?php require 'validator.php' ?>
<?php
class loginform
{
    public function Validate($email,$password)
    {
        $errors = [];

// Validate email
if (!validator::email($email)) {
    $errors['email'] = 'Please provide a valid email.';
}

// Validate password length
if (!validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password.';
}

// If there are validation errors, return to the login view
if (!empty($errors)) {
    return require_once './views/session/create.view.php';
}
    }
}