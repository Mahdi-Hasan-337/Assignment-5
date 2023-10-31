<?php

session_start();

$usersFile = 'data/users.json';

$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

$error_message = '';
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error_message = "Please fill in all the fields.";
    } else {
        if (isset($users[$email]) && $users[$email]['password'] === $password) {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $users[$email]['role'];
            header('Location: dashboard.php');
        } else {
            $error_message = "Invalid email or password.";
        }
    }
}
?>