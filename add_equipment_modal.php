
<div class="modal-bg" id="addEquipmentModal" style="display:none;">
  <div class="modal-content">
    <button class="close-modal-btn" id="closeModalBtn" type="button">&times;</button>
    <h3>Add Unserviceable Equipment</h3>
    <form id="addEquipmentForm" autocomplete="off">
      <div class="form-row">
        <label class="modal-label" for="serial_number">Serial Number</label>
        <input class="modal-input" type="text" id="serial_number" name="serial_number" required>
      </div>
      <div class="form-row">
        <label class="modal-label" for="particular">Particular</label>
        <input class="modal-input" type="text" id="particular" name="particular" required>
      </div>
      <div class="form-row">
        <label class="modal-label" for="specs">Specification</label>
        <input class="modal-input" type="text" id="specs" name="specs" required>
      </div>
      <div class="form-row">
        <label class="modal-label" for="category">Category</label>
        <select class="modal-select" id="category" name="category" required>
          <option value="">Select Category</option>

        </select>
      </div>
      <div class="form-row">
        <label class="modal-label" for="repairlevel">Repair Level</label>
        <select class="modal-select" id="repairlevel" name="repairlevel" required>
          <option value="">Select Level</option>
          <option value="1">Level 1</option>
          <option value="2">Level 2</option>
          <option value="3">Level 3</option>
        </select>
      </div>
      <div class="form-row">
        <label class="modal-label" for="unit">Unit</label>
        <select class="modal-select" id="unit" name="unit" required>
          <option value="">Select Unit</option>
        </select>
      </div>
      <div class="form-row">
        <label class="modal-label" for="location">Location</label>
        <input class="modal-input" type="text" id="location" name="location" required>
      </div>
      <div class="form-row">
        <label class="modal-label" for="status">Status</label>
        <select class="modal-select" id="status" name="status" required>
          <option value="">Select Status</option>
      </div>
      <div class="form-row">
        <label class="modal-label" for="remarks">Remarks</label>
        <textarea class="modal-textarea" id="remarks" name="remarks"></textarea>
        <br>
        <label class="modal-labelrem" for="remarks">*Maximum Characters: 500</label>
      </div>
      <div class="modal-error" id="modalError"></div>
      <div class="modal-actions">
        <button class="modal-btn" type="submit" id="submitEquipmentBtn" style="background: #e53935; color: #fff;">Add</button>
        <button class="modal-btn" type="button" id="cancelModalBtn" style="background: #cbd5e1; color: #222;">Cancel</button>
      </div>
      <input type="hidden" name="add_equipment" value="1">
    </form>
  </div>
</div>