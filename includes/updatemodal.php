<!-- Register Modal -->

<div class="modal fade" id="updatemodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="./update.php" method="post">
            <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times</button>
            <h2>Update</h2>
            <div class="input-box">
              <label for="role">Select Role:</label>
              <select id="role" class="form-control" name="role" required>
                <option value="manager" <?php if ($user[0] === 'manager') echo 'selected'; ?>>Manager</option>
                <option value="admin" <?php if ($user[0] === 'admin') echo 'selected'; ?>>Admin</option>
                <option value="user" <?php if ($user[0] === 'user') echo 'selected'; ?>>User</option>
              </select>
            </div>
            <div class="input-box">
              <input type="text" id="username" class="form-control" name="username" value="<?php echo $user[1]; ?>" required>
              <i class="fa-solid fa-user email"></i>
            </div>
            <div class="input-box">
              <input type="email" id="email" class="form-control" name="email" value="<?php echo $user[2]; ?>" readonly required>
              <i class="fa-solid fa-envelope email"></i>
            </div>
            <a href="./update.php">
              <button class="button" name="update_btn">UPDATE</button>
            </a>        
          </form>
      </div>
    </div>
  </div>
</div>