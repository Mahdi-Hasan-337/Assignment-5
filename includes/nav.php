<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Assignment-5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="login-btn nav-link text-center active" href="signin.php">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="login-btn nav-link text-center active" href="signup.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="login-btn nav-link text-center active" href="logoutModal" data-bs-toggle="modal" data-bs-target="#logoutModal" role="button">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" aria-hidden="true" aria-labelledby="logoutModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body" style="padding:2rem;">
        <h2>Are you sure to logout?</h2>
        <div class="d-flex justify-content-center mt-5">
          <a href="includes/action/logoutAction.php" class="col-lg-4 btn btn-primary">Logout</a>
          <span><pre>   </pre></span>
          <button type="button" class="col-lg-4 btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>