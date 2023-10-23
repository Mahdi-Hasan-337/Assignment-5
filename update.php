<?php

if (isset($_POST["update_btn"])) {
    $role = $_POST["role"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    $data = file_get_contents('./data/users.txt');
    $lines = explode("\n", $data);

    $newData = array();

    foreach ($lines as $line) {
        $userData = explode(", ", $line);
        if (count($userData) === 4 && $userData[2] !== $email) {
            $newData[] = $line;
        } else {
            $newData[] = "$role, $username, $email, $userData[3]";
        }
    }

    file_put_contents('./data/users.txt', implode("\n", $newData));

    header("Location: dashboard.php");
} else {
    header("Location: dashboard.php");
}
?>