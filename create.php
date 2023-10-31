<?php
session_start();
$usersFile = 'data/users.json';

$users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

$error_message = '';

function saveUsers($users, $file) {
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

if (isset($_POST['register_btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "user";

    $username_pattern = "/[A-Za-z ._]{3,}/";
    $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,}/";

    if (empty($username) || empty($email) || empty($password)) {
        $errorMsg = "Please fill all the fields.";
    } elseif (!preg_match($username_pattern, $username)) {
        $errorMsg = "Username should contain only letters, numbers, and underscores.";
    } elseif (!preg_match($email_pattern, $email)) {
        $errorMsg = "Invalid email format.";
    } elseif (!preg_match($pass_pattern, $password)) {
        $errorMsg = "Password should be at least 8 characters long with one uppercase, one lowercase, one special character.";
    } else {
        if (isset($users[$email])) {
            $errorMsg = "Email already exists.";
        } else {
            $users[$email] = [
                'username' => $username,
                'password' => $password,
                'role' => $role,
            ];

            saveUsers($users, $usersFile);
            $_SESSION['email'] = $email;
            header('Location: index.php');
        }
    }
}
?>