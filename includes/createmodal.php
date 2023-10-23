<!-- Register Modal -->

<div class="modal fade" id="createmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="create.php" method="post">
            <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
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
                <input type="password" placeholder="Enter Password" id="password" class="form-control" name="password" required>
                <i class="fa-solid fa-lock password"></i>
                <!-- <i class="toggle-password fa-solid fa-eye-slash pwd_hide" onclick="passwordToggole('password')" style="color:#707070; font-size: 0.9rem;"></i> -->
            </div>
            <button class="button" name="register_btn">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>