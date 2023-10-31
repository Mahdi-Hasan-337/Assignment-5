<?php include_once 'includes/header.php';?>
<?php include_once './read.php';?>
<?php include_once 'includes/nav.php';?>
    <link rel="stylesheet" href="./assets/css/log_reg_modal.css">

    <div class="container mt-5">
        <form class="center col-4" action="signin.php" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <input type="email" id="email" placeholder="Enter Email" class="form-control" name="email" value="<?php if (isset($_COOKIE["email"])) {echo $_COOKIE["email"];}?>" required>
                <i class="fa-solid fa-envelope email"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Password" id="password" class="form-control" name="password" value="<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>" required>
                <i class="fa-solid fa-lock password"></i>
                <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passwordToggle('password')" style="color:#707070; font-size: 0.9rem;"></i>
            </div>
            <div class="option-field">
                <span class="checkbox">
                    <input type="checkbox" id="check" name="remember">
                    <label for="check">Remember me</label>
                </span>
                <a class="forgot_pass" style="cursor:pointer; font-style:italic;">Forgot Password?</a>
            </div>
            <button class="button" name="login_btn">Login</button>
            <p><?php echo $error_message ?></p>
            <div class="login-signup">
                Don't have an account?
                <a class="signup-txt" href="./signup.php">Signup</a>
            </div>
        </form>
    </div>

    <script src="./assets/js/log_reg_script.js"></script>
<?php include_once 'includes/header.php';?>
