<?php
session_start();

$role = $_SESSION["role"] ?? "";
$username = $_SESSION["username"] ?? "";
?>

<?php include_once 'includes/header.php';
include_once 'includes/nav.php';?>

<link rel="stylesheet" href="./assets/css/index.css">

<div class="container">
  <div class="center">
    <!-- <h1>Welcome <?php //echo $username ?> to our website</h1> -->
    <h1>Assignment-5 : Crew Project</h1>
  </div>
</div>

<?php include_once 'includes/footer.php';?>