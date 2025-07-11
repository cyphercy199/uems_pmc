  <!-- Modal for Edit User -->
    <div id="editUserModal" class="modal-overlay">
      <div class="modal-content">
        <span class="modal-close" id="editModalCloseBtn">&times;</span>
        <h2>Edit User</h2>
        <form id="editUserForm" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" id="edit_userid" name="userid">
          <div class="form-group">
            <label for="edit_rankname">Name:</label>
            <input type="text" id="edit_rankname" name="rankname" required>
          </div>
          <div class="form-group">
            <label for="edit_usertype">Role:</label>
            <select id="edit_usertype" name="usertype" required>
              <option value="">Select a role</option>
              <option>Admin</option>
              <option>User</option>
            </select>
          </div>
          <div class="form-group">
            <label for="edit_password">Password:</label>
            <input type="password" id="edit_password" name="password" placeholder="Leave blank to keep current password" autocomplete="new-password">
          </div>
          <div class="form-group">
            <label for="edit_picture">Picture:</label>
            <input type="file" id="edit_picture" name="picture" accept="image/*">
            <small>If left blank, current picture will be kept.</small>
          </div>
          <div class="modal-actions">
            <button type="submit" class="modal-add-btn">Save Changes</button>
            <button type="button" class="modal-cancel-btn" id="editModalCancelBtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Edit Modal End -->