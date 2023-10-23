<?php
session_start();

if (isset($_SESSION["email"])) {
    if (isset($_GET["id"])) {
        $emailToDelete = $_GET["id"];
        
        $data = file_get_contents("./data/users.txt");
        $lines = explode("\n", $data);

        $newData = array();

        foreach ($lines as $line) {
            $userData = explode(", ", $line);
            if (count($userData) === 4 && $userData[2] !== $emailToDelete) {
                $newData[] = $line;
            }
        }

        file_put_contents("./data/users.txt", implode("\n", $newData));
        
        header("Location: dashboard.php");
    } else {
        echo "No user selected for deletion.";
    }
} 
// else {
//     echo "You are not logged in. Please log in to perform this action.";
// }
?>