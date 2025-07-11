<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Equipment Status Reports</title>
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="reports.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.7.0/jspdf.plugin.autotable.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<aside class="dashboard-sidebar">
  <nav>
    <ul class="sidebar-nav-list">
      <li>
        <a href="dashboard.php" class="sidebar-link active">
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
        <a href="user_management.php" class="sidebar-link">
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
  <header class="dashboard-header">
    <div class="logo-header">
      <img src="mc6logo.png" alt="Logo">
      <h1 class="dashboard-title">Equipment Status Reports</h1>
    </div>
  </header>

  <div class="generate-report-btn-wrapper" style="margin: 0 auto 32px auto;">
    <button class="generate-report-btn" id="generateReportBtn">
      <span class="sidebar-icon">
        <i class="fa-solid fa-file-pdf"></i>
      </span>
      Generate Report
    </button>
  </div>

  <div class="dashboard-2rows-3cols">
    <div class="cell cell-recap">
      <div class="recap-table-container">
        <table class="recap-table">
          <thead>
            <tr class="table-title-row">
              <th colspan="3">Equipment Recap by Category &amp; Status</th>
            </tr>
            <tr>
              <th>Category</th>
              <th>Status</th>
              <th>Total No. Of Equipment</th>
            </tr>
          </thead>
          <tbody id="recap-table-body">
            <!-- Recap rows rendered by JS -->
          </tbody>
        </table>
        <div class="recap-pagination inventory-pagination" id="recap-pagination"></div>
      </div>
    </div>
    <div class="cell cell-pie">
      <div class="chart-box chart-centered">
        <div class="chart-title">Equipment Distribution (Pie by Status)</div>
        <canvas id="pieChart" width="320" height="320"></canvas>
      </div>
    </div>
    <div class="cell cell-inventory">
      <div class="inventory-table-card">
        <table class="inventory-table">
          <thead>
            <tr class="table-title-row">
              <th colspan="3">Equipment Inventory</th>
            </tr>
            <tr>
              <th>Particular</th>
              <th>Category</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id="inventory-table-body">
            <!-- Inventory rows rendered by JS -->
          </tbody>
        </table>
        <div class="inventory-pagination" id="inventory-pagination"></div>
      </div>
    </div>
    <div class="cell cell-bar">
      <div class="chart-box chart-centered">
        <div class="chart-title">Equipment Status (Bar by Status)</div>
        <canvas id="barChart" width="380" height="320"></canvas>
      </div>
    </div>
    <div class="cell cell-stacked">
      <div class="chart-box chart-centered">
        <div class="chart-title">Equipment Status (Stacked Bar by Category & Status)</div>
        <canvas id="stackedBarChart" width="440" height="330"></canvas>
      </div>
    </div>
    <div class="cell cell-donut">
      <div class="chart-box chart-centered">
        <div class="chart-title">Total by Category with Total No. of Equipment (Donut)</div>
        <canvas id="donutChart" width="340" height="340"></canvas>
      </div>
    </div>
  </div>
</div>
<footer class="dashboard-footer">
  <span class="footer-muted">UEMS © Philippine Marine Corps 2025</span>
</footer>
<!-- <script src="reports.js"></script>
<script src="sidebar-active.js"></script>
<script src="generate_report.js"></script> -->
</body>
</html>