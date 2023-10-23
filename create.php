<?php

session_start();

if (isset($_SESSION["email"])) {
    header("Location: index.php");
}

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$role = "user";

$error_message = "";

$username_pattern = "/[A-Za-z ._]{3,}/";
$email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,}/";

$fp = fopen("data/users.txt", "a+");
$emailExists = false;
while ($line = fgets($fp)) {
    $values = explode(",", $line);
    $existingEmail = trim($values[2]);
    if ($email == $existingEmail) {
        $emailExists = true;
        break;
    }
}
fclose($fp);

if ($emailExists) {
    echo '<script>alert("Email already exists. Please use a different email address.")</script>';
} elseif (!preg_match($username_pattern, $username)) {
    // $error_message = 'Invalid Username. Only space, character, underscore are allowed.';
    echo '<script>alert("Invalid Username. Only space, character, underscore are allowed.")</script>';
} elseif (!preg_match($email_pattern, $email)) {
    $error_message = 'Invalid Email';
    echo '<script>alert("Invalid Email")</script>';
} elseif (!preg_match($pass_pattern, $password)) {
    $error_message = 'Invalid Password';
    echo '<script>alert("Invalid Password")</script>';
} else {
    //$hash_pass = password_hash($r_pass, PASSWORD_DEFAULT);
    if ($email != "" && $password != "") {
        $fp = fopen("./data/users.txt", "a");

        fwrite($fp, "\n{$role}, {$username}, {$email}, {$password}"); 
        //fwrite($fp, "\n{$role}, {$username}, {$email}, {$hash_pass}");
        fclose($fp);

        header("Location: index.php");
    } else {
        $errorMessage = "Please enter you email and password!";
    }
}
?>