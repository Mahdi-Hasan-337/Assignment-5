<?php
session_start();

if (!isset($_SESSION["email"]) || $_SESSION["role"] !== "admin") {
    header("Location: signin.php");
    exit;
}


$usersFile = 'data/users.json';

if (isset($_POST['update_btn'])) {
    $email = $_POST['email'];
    $newRole = $_POST['role'];

    $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

    if (isset($users[$email])) {
        $users[$email]['role'] = $newRole;

        file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

        header('Location: dashboard.php');
    }
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $user = $users[$email];
}
?>