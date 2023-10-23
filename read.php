<?php 

$data = file_get_contents('data/users.txt');
$lines = explode("\n", $data);

$userData = array();

foreach ($lines as $line) {
    $values = explode(", ", $line);
    $userData[] = $values;
}
?>