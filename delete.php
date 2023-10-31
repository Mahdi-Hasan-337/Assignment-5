<?php
session_start();

if (!isset($_SESSION["email"]) || $_SESSION["role"] !== "admin") {
    header("Location: signin.php");
    exit;
}

$usersFile = json_decode(file_get_contents('data/users.json'), true);

if (isset($_GET["email"])) {
    $emailToDelete = $_GET["email"];

    unset($usersFile[$emailToDelete]);
    file_put_contents('data/users.json', json_encode($usersFile));
    header("Location: dashboard.php");
} else {
    echo "No user selected for deletion.";
}
?>