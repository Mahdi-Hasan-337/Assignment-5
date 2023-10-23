<?php include_once './create.php';?>
<?php include_once 'includes/header.php';?>
<?php include_once 'includes/nav.php';?>
    <link rel="stylesheet" href="./assets/css/log_reg_modal.css">

    <div class="container mt-5">
        <form class="center col-4" action="signup.php" method="post">
            <h2>Register</h2>
            <div class="input-box">
                <input type="text" id="username" placeholder="Enter username" class="form-control" name="username" required>
                <i class="fa-solid fa-user email"></i>
            </div>

            <div class="input-box">
                <input type="email" id="email" placeholder="Enter email" class="form-control" name="email" required>
                <i class="fa-solid fa-envelope email"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Enter Password" id="r_password" class="form-control" name="password" required>
                <i class="fa-solid fa-lock password"></i>
                <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passwordToggle('r_password')" style="color:#707070; font-size: 0.9rem;"></i>
            </div>

            <button class="button" name="register_btn">Register</button>
            <p><?php echo $error_message ?></p>
            <div class="login-signup">
                Already have an account?
                <a class="signup-txt" href="./signin.php">Signin</a>
            </div>
        </form>
    </div>

    <script src="./assets/js/log_reg_script.js"></script>
<?php include_once 'includes/footer.php';?>