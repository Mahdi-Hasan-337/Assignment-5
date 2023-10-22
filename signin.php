<?php
session_start();

$email = $_POST["l_email"] ?? "";
$password = $_POST["l_pass"] ?? "";

$fp = fopen("database/db.txt", "r");

$roles = array();
$emails = array();
$passwords = array();

while ($line = fgets($fp)) {
    $values = explode(",", $line);

    array_push($roles, trim($values[0]));
    array_push($emails, trim($values[1]));
    array_push($passwords, trim($values[2]));
}

fclose($fp);

for ($i = 0; $i < count($roles); $i++) {
    if ($email == $emails[$i] && $password == $passwords[$i]) {
        $_SESSION["role"] = $roles[$i];
        $_SESSION["email"] = $emails[$i];
        header("Location: home.php");
    } else {
        $_SESSION['status'] = "Email and password not matched...!!!";
    }
}

if (!empty($_POST["remember"])) {
    setcookie("email", $email, time() + 3600);
    setcookie("password", $password, time() + 3600);
    // echo "Cookies Set Successfuly";
} else {
    setcookie("email", "");
    setcookie("password", "");
    // echo "Cookies Not Set";
}

?>


<link rel="stylesheet" href="assets/css/log_reg_modal.css">

<?php include('./includes/header.php'); ?>
<?php include('./includes/nav.php'); ?>

<form class="center col-4" action="signin_action.php" method="post">
    <h2>Login</h2>
    <div class="input-box">
        <input type="email" id="email" placeholder="Enter Email" class="form-control" name="l_email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
        <i class="fa-solid fa-envelope email"></i>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Enter Password" id="password" class="form-control" name="l_pass" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
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
    <div class="login-signup">
    Don't have an account?
    <a class="signup-txt" href="./signup.php">Signup</a>
    </div>
</form>

<script src="./assets/js/nav.js"></script>

<?php include('./includes/footer.php'); ?>

