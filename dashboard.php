<?php
session_start();

if (!isset($_SESSION["email"]) || $_SESSION["role"] !== "admin") {
    header("Location: signin.php");
    exit;
}

include_once './read.php';
//include_once './delete.php';

include_once './includes/header.php';
include_once './includes/nav.php';
?>

<link rel="stylesheet" href="./assets/css/dashbaord.css">
<link rel="stylesheet" href="./assets/css/log_reg_modal.css">

<div class="d-flex" id="wrapper">
    <div class="bg-white d-flex flex-column" id="sidebar-wrapper">
        <div class="contents" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-chart-line me-2"></i>Analytics
                </a>

                <a href="#" class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#NotificationMenu" aria-expanded="false" aria-controls="NotificationMenu" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fa-solid fa-bell me-2"></i>Notification
                </a>

                <div class="collapse" id="NotificationMenu" style="padding-left: 1.4rem;">
                    <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                        <i class="fas fa-comment-alt me-2"></i>Vlog Reguest
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1rem; font-family:'Poppins',sans-serif;">
                        <i class="fas fa-comment-alt me-2"></i>Enable Request
                    </a>
                </div>

                <a href="#" class="list-group-item list-group-item-action" style="text-transform:uppercase;font-size:1.2rem; font-family:'Poppins',sans-serif; font-weight:bold;">
                    <i class="fas fa-comments me-2"></i>Feedback
                </a>
            </div>
        </div>
    </div>

    <!-- Contents for dashboard -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-bars fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>
        </nav>

        <div class="container-fluid px-4">
            <div class="row my-5">
                <a class="text-center mb-3 bg-primary p-2" data-bs-toggle="modal" href="#createmodal" role="button" style="font-size: 1.2rem; font-weight:bold; color:black; text-decoration:none;">ADD USER</a>
                <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ROLE</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">DELETE</th>
                                <th scope="col">UPDATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($userData as $user) {?>
                            <tr>
                                <td><?php echo $user[0]; ?></td>
                                <td><?php echo $user[1]; ?></td>
                                <td><?php echo $user[2]; ?></td>
                                <td>
                                    <?php if ($user[0] !== 'admin') {?>
                                        <a class='col-6 btn btn-danger' href='./delete.php?id=<?php echo $user[2]; ?>'>DELETE</a>

                                    <?php }?>
                                </td>
                                <td>
                                <?php if ($user[0] !== 'admin') {?>
                                        <a class='col-6 btn btn-warning' data-bs-toggle="modal" href="#updatemodal" role="button">UPDATE</a>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./assets/js/dashboard.js"></script>

<?php

include_once './includes/createmodal.php';
include_once './includes/updatemodal.php';
include_once './includes/footer.php';

?>