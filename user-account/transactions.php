<?php require_once "head.php" ?>
<style>
    body {
      background: #f9fafc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .page-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: #333;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      border: none;
    }
    .filter-section {
      margin-bottom: 1.5rem;
    }
    .badge {
      font-size: 0.8rem;
      padding: 6px 10px;
      border-radius: 20px;
    }
    .badge-success { background: #28a745; }
    .badge-warning { background: #ffc107; color: #000; }
    .badge-danger { background: #dc3545; }
    table th {
      background: #f1f3f6;
      font-weight: 600;
      font-size: 0.9rem;
    }
    table td {
      vertical-align: middle;
      font-size: 0.9rem;
    }
  </style>
<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


      
        <!-- Sidebar Start -->
      <?php require_once "sidebar.php" ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
          <?php require_once "navbar.php" ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
<div class="container my-5">
  <h2 class="page-title">💳 Transactions</h2>
    <!-- Download Statement Button -->
    <button class="btn btn-outline-primary mb-3">
      <i class="fa fa-download me-2"></i> Download Statement
    </button>
  <!-- Filters -->
  <div class="card filter-section p-3 mb-4">
    <form class="row g-3 align-items-end">
      <div class="col-md-3">
        <label class="form-label">Date From</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-md-3">
        <label class="form-label">Date To</label>
        <input type="date" class="form-control">
      </div>
      <div class="col-md-3">
        <label class="form-label">Transaction Type</label>
        <select class="form-select">
          <option value="">All</option>
          <option>Transfer</option>
          <option>Bills Payment</option>
          <option>Deposit</option>
          <option>Withdrawal</option>
        </select>
      </div>
      <div class="col-md-2">
        <label class="form-label">Status</label>
        <select class="form-select">
          <option value="">All</option>
          <option>Completed</option>
          <option>Pending</option>
          <option>Failed</option>
        </select>
      </div>
      <div class="col-md-1 d-grid">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </form>
  </div>

  <!-- Transaction History Table -->
  <div class="card p-3">
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>Date</th>
            <th>Transaction ID</th>
            <th>Type</th>
            <th>Beneficiary</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-09-10</td>
            <td>#TXN123456</td>
            <td>Transfer</td>
            <td>John Doe</td>
            <td><strong>₦50,000</strong></td>
            <td><span class="badge badge-success">Completed</span></td>
          </tr>
          <tr>
            <td>2025-09-12</td>
            <td>#TXN123457</td>
            <td>Bills Payment</td>
            <td>MTN Nigeria</td>
            <td><strong>₦5,000</strong></td>
            <td><span class="badge badge-warning">Pending</span></td>
          </tr>
          <tr>
            <td>2025-09-14</td>
            <td>#TXN123458</td>
            <td>Withdrawal</td>
            <td>Access Bank</td>
            <td><strong>₦100,000</strong></td>
            <td><span class="badge badge-danger">Failed</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
            </div>
            <!-- Blank End -->


   <?php require_once "bottom-navbar.php" ?>
        </div>
        <!-- Content End -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>