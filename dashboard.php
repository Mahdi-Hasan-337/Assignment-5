<?php include './includes/header.php';?>
<?php include './includes/nav.php';?>

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
                <h3 class="fs-4 mb-3">Recent Orders</h3>
                <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php';?>