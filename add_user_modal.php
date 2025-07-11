   <!-- Modal for Add User -->
    <div id="addUserModal" class="modal-overlay">
      <div class="modal-content">
        <span class="modal-close" id="modalCloseBtn">&times;</span>
        <h2>Add New User</h2>
        <form id="addUserForm" enctype="multipart/form-data">
          <div class="form-group">
            <label for="rankname">Name:</label>
            <input type="text" id="rankname" name="rankname" required>
          </div>
          <div class="form-group">
            <label for="userid">Username:</label>
            <input type="text" id="userid" name="userid" required>
          </div>
          <div class="form-group">
            <label for="usertype">Role:</label>
            <select id="usertype" name="usertype" required>
              <option value="">Select a role</option>
              <option>Admin</option>
              <option>User</option>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" accept="image/*">
            <small>If left blank, a default picture will be used.</small>
          </div>
          <div class="modal-actions">
            <button type="submit" class="modal-add-btn">Add User</button>
            <button type="button" class="modal-cancel-btn" id="modalCancelBtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal End -->