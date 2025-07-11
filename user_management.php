<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Management</title>
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="user_management.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <!-- Sidebar -->
  <aside class="dashboard-sidebar">
  <nav>
    <ul class="sidebar-nav-list">
        <li>
        <a href="dashboard.php" class="sidebar-link">
          <span class="sidebar-icon">
            <img src="report.png" alt="Reports" width="22" height="22" style="vertical-align:middle;">
          </span>
          Dashboard
        </a>
      </li>
      <li></li>
      <li>
        <a href="eqmt_management.php" class="sidebar-link">
          <span class="sidebar-icon">
            <img src="home.png" alt="Home" width="22" height="22" style="vertical-align:middle;">
          </span>
          Equipment Management
        </a>
      </li>
        <a href="user_management.php" class="sidebar-link active">
          <span class="sidebar-icon">
            <img src="management.png" alt="User Management" width="22" height="22" style="vertical-align:middle;">
          </span>
          User Management
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-user-profile">
  <div class="sidebar-user-avatar">
    <img src="user_photo.png">
  </div>
  <div class="sidebar-user-role">admin</div>
  <div class="sidebar-user-name">Rank Name + Unit</div>
</div>
      <li class="sidebar-signout">
        <button class="signout-btn" id="signoutBtn" type="button">
          <span class="sidebar-icon">
            <img src="signout.png" alt="Sign out" width="25" height="25" style="vertical-align:left;">
          </span>
          Sign out
        </button>
      </li>
    </ul>
  </nav>
</aside>

  <div class="main-content-area">
    <!-- HEADER -->
    <header class="dashboard-header">
      <div class="logo-header">
        <img src="mc6logo.png" alt="Logo">
        <h1 class="dashboard-title">User Management</h1>
      </div>
    </header>

    <!-- Main Card -->
    <div class="user-mgmt-card minimalist-theme">
      <div class="user-mgmt-header minimalist-theme-header">
        <h2><span style="font-weight:700;">Users</span></h2>
        <div class="user-mgmt-actions">
          <button class="add-user-btn" id="addUserBtn"><i class="fa-solid fa-user-plus"></i> Add New User</button>
        </div>
      </div>
      <div class="table-wrapper">
        <table class="usermgmt-table minimalist-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Date Created</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="usersTableBody">
            <!-- User rows will be inserted here by JS -->
          </tbody>
        </table>
      </div>
      <div class="user-pagination-row">
        <span class="user-entries-note" id="entriesNote"></span>
        <div class="pagination" id="paginationControls"></div>
      </div>
    </div>

 

   

    <footer class="dashboard-footer">
      <span class="footer-muted">UEMS &copy; Philippine Marine Corps 2025</span>
    </footer>
  </div>

  <div id="userMgmtError" style="display:none;background:#fee2e2;color:#991b1b;padding:10px 18px;border-radius:5px;margin:10px 0;text-align:center;"></div>
  <div id="userMgmtSuccess" style="display:none;background:#d1fae5;color:#047857;padding:10px 18px;border-radius:5px;margin:10px 0;text-align:center;"></div>

  <script src="user_management.js"></script>
</body>
</html>