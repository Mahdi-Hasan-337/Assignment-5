<?php 
    session_start();

    if(isset($_POST['register_btn'])) {
        $username = $_POST['r_username'];
        $email = $_POST['r_email'];
        $password = $_POST['r_pass'];
        $r_con_pass = $_POST['r_con_pass'];
        $role = "user";

        // Define regex patterns for validation
        $username_pattern = "/[A-Za-z ._]{3,}/";
        $email_pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
        $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,}/";

        // Check if the email already exists
        $fp = fopen("database/db.txt", "a+");

        $emailExists = false;
        while ($line = fgets($fp)) {
            $values = explode(",", $line);
            $existingEmail = trim($values[2]); // Assuming email is at index 2
            if ($email == $existingEmail) {
                $emailExists = true;
                break;
            }
        }
        fclose($fp);

        if ($emailExists) {
            $_SESSION['status'] = 'Email already exists. Please use a different email address.';
            header("Location: index.php");
        } 
        elseif (!preg_match($username_pattern, $username)) {
            $_SESSION['status'] = 'Invalid Username. Only spaces, characters, underscores are allowed.';            
            header("Location: index.php");
        } 
        elseif (!preg_match($email_pattern, $email)) {
            $_SESSION['status'] = 'Invalid Email';
            header("Location: index.php");
        } 
        elseif (!preg_match($pass_pattern, $password)) {
            $_SESSION['status'] = 'Invalid Password';
            header("Location: index.php");
        } 
        elseif ($password != $r_con_pass) {
            $_SESSION['status'] = 'Password not matched';
            header("Location: index.php");
        } 
        else {
            // Hash the password before saving it
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Open the file again to append user data
            $fp = fopen("C:/xampp/htdocs/Assignment - 5/database/db.txt", "a");
            fwrite($fp, "\n{$role}, {$username}, {$email}, {$hashedPassword}");
            fclose($fp);

            header("Location: index.php");
        }
    }
?>

<link rel="stylesheet" href="assets/css/log_reg_modal.css">

<?php include('./includes/header.php'); ?>
<?php include('./includes/nav.php'); ?>

<form class="center col-4" action="signup_action.php" method="post">
    <h2>Register</h2>
    <div class="input-box">
        <input type="text" id="username" placeholder="Enter username" class="form-control" name="r_username" required>
        <i class="fa-solid fa-user email"></i>
    </div>
    <div class="input-box">
        <input type="email" id="email" placeholder="Enter email" class="form-control" name="r_email" required>
        <i class="fa-solid fa-envelope email"></i>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Enter Password" id="r_password" class="form-control" name="r_pass" required>
        <i class="fa-solid fa-lock password"></i>
        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passwordToggle('password')" style="color:#707070; font-size: 0.9rem;"></i>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Re-type Password" id="con_password" class="form-control" name="r_con_pass" required>
        <i class="fa-solid fa-lock password"></i>
        <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passwordToggle('r_password')" style="color:#707070; font-size: 0.9rem;"></i>
    </div>
    <button class="button" name="register_btn">Register</button>
    <div class="login-signup">
        Already have an account?
        <a class="signup-txt" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor:pointer;">Signin</a>
    </div>
</form>

<script src="./assets/js/nav.js"></script>

<?php include('./includes/footer.php'); ?>