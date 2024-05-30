<?php
require_once 'database.php';
require_once 'validator.php';

$email = $_POST['email'];
$password = $_POST['password'];

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

try {
    // Use prepared statements to prevent SQL injection
    $email = '"' . $email . '"';
    $query = "SELECT * FROM `users` WHERE email = $email";
    $stmt = $database->executeQuery($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // If no user is found with the provided email
    if ($row === false) {
        $errors['email'] = 'No matching account for this email.';
        return require_once './views/session/create.view.php';
    }

    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Successful login, proceed with user session setup
        // Here you can set session variables, redirect to a dashboard, etc.
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header('Location: /dilgent-tecnogies-internee/laracast/'); // Adjust the redirect as needed
        exit();
    } else {
        // Incorrect password
        $errors['password'] = 'Incorrect password.';
        return require_once './views/session/create.view.php';
    }
} catch (Exception $e) {
    // Handle potential exceptions, such as database connection issues
    error_log($e->getMessage());
    $errors['general'] = 'An error occurred. Please try again later.';
    return require_once './views/session/create.view.php';
}
