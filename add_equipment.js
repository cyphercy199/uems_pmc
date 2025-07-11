// Add Equipment Modal Open/Close Logic
document.addEventListener('DOMContentLoaded', function() {
  var addEquipmentBtn = document.getElementById('addEquipmentBtn');
  var addEquipmentModal = document.getElementById('addEquipmentModal');
  var closeModalBtn = document.getElementById('closeModalBtn');
  var cancelModalBtn = document.getElementById('cancelModalBtn');
  var addEquipmentForm = document.getElementById('addEquipmentForm');
  var errorDiv = document.getElementById('modalError');
  var unitSel = document.getElementById('unit');
  var repairLevelSel = document.getElementById('repairlevel');
  var locationInput = document.getElementById('location');

  // Open modal, reset form, clear errors and fields
  if (addEquipmentBtn && addEquipmentModal) {
    addEquipmentBtn.onclick = function() {
      addEquipmentModal.style.display = 'flex';
      if (addEquipmentForm) addEquipmentForm.reset();
      if (errorDiv) errorDiv.textContent = '';
      if (unitSel) {
        unitSel.disabled = true;
        unitSel.innerHTML = '<option value="">Select Unit</option>';
      }
      if (repairLevelSel) repairLevelSel.value = '';
      if (locationInput) locationInput.value = '';
    };
  }

  // Close modal on "close" or "cancel" buttons
  if (closeModalBtn && addEquipmentModal) {
    closeModalBtn.onclick = function() {
      addEquipmentModal.style.display = 'none';
    };
  }
  if (cancelModalBtn && addEquipmentModal) {
    cancelModalBtn.onclick = function() {
      addEquipmentModal.style.display = 'none';
    };
  }

  // Prevent click in modal-content from closing modal
  var modalContent = addEquipmentModal ? addEquipmentModal.querySelector('.modal-content') : null;
  if (modalContent) {
    modalContent.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  }

  // (Optional) Click outside modal to close (if desired, currently empty)
  if (addEquipmentModal) {
    addEquipmentModal.addEventListener('click', function(e) {
      if (e.target === addEquipmentModal) {
        // Uncomment to enable close on outside click:
        // addEquipmentModal.style.display = 'none';
      }
    });
  }
});