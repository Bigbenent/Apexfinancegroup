<?php require_once "head.php" ?>
<!-- Custom Styles -->
<style>
      .bottom-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
background: linear-gradient(135deg, #1b4253ff, #0cbbf5ff, #074e6dff);
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px 0;
    box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
    z-index: 1000;
  }

  .bottom-bar a {
    flex: 1;
    text-align: center;
    color: #555;
    text-decoration: none;
    font-size: 13px;
    transition: all 0.3s ease;
  }

  .bottom-bar a i {
    font-size: 20px;
    display: block;
    margin-bottom: 3px;
  }

  .bottom-bar a.active, 
  .bottom-bar a:hover {
    color: #007bff; /* Primary fintech blue */
  }
  .wallet-card {
    background: linear-gradient(135deg, #1b4253ff, #0cbbf5ff, #074e6dff);
    border: none;
  }
  .wallet-card h5 {
    font-weight: 600;
    letter-spacing: 0.5px;
  }
  .wallet-box {
    transition: transform 0.2s ease-in-out;
  }
  .wallet-box:hover {
    transform: translateY(-5px);
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


<!-- Wallet Overview Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-12">
      <div class="wallet-card rounded shadow-lg p-4 text-white">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="mb-0 text-light">
            <i class="fa fa-wallet me-2"></i> My Wallet
          </h5>
          <button class="btn btn-sm btn-light text-dark fw-bold">
            + Add Funds
          </button>
        </div>
        <div class="row text-center g-3">
          <!-- Account Balance -->
          <div class="col-md-3 col-6">
            <div class="wallet-box bg-primary bg-gradient text-white p-3 rounded shadow-sm h-100">
              <i class="fa fa-wallet fa-2x mb-2"></i>
              <p class="mb-1 small">Balance</p>
              <h6 class="mb-0 fw-bold">$12,340.50</h6>
            </div>
          </div>
          <!-- Total Deposits -->
          <div class="col-md-3 col-6">
            <div class="wallet-box bg-success bg-gradient text-white p-3 rounded shadow-sm h-100">
              <i class="fa fa-arrow-down fa-2x mb-2"></i>
              <p class="mb-1 small">Deposits</p>
              <h6 class="mb-0 fw-bold">$5,230</h6>
            </div>
          </div>
          <!-- Total Withdrawals -->
          <div class="col-md-3 col-6">
            <div class="wallet-box bg-danger bg-gradient text-white p-3 rounded shadow-sm h-100">
              <i class="fa fa-arrow-up fa-2x mb-2"></i>
              <p class="mb-1 small">Withdrawals</p>
              <h6 class="mb-0 fw-bold">$2,800</h6>
            </div>
          </div>
          <!-- Active Loans -->
          <div class="col-md-3 col-6">
            <div class="wallet-box bg-warning bg-gradient text-dark p-3 rounded shadow-sm h-100">
              <i class="fa fa-hand-holding-usd fa-2x mb-2"></i>
              <p class="mb-1 small">Loans</p>
              <h6 class="mb-0 fw-bold">$3,000</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Wallet Overview End -->



<!-- Charts Section Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <!-- Spending Analysis -->
    <div class="col-sm-12 col-xl-6">
      <div class="bg-light text-center rounded p-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Spending Analysis</h6>
          <a href="#">View Details</a>
        </div>
        <canvas id="spending-analysis"></canvas>
      </div>
    </div>

    <!-- Income vs Expenses -->
    <div class="col-sm-12 col-xl-6">
      <div class="bg-light text-center rounded p-4 shadow-sm">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Income vs Expenses</h6>
          <a href="#">View Details</a>
        </div>
        <canvas id="income-expenses"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- Charts Section End -->


<!-- Recent Transactions Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4 shadow-sm">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Recent Transactions</h6>
      <a href="#">See All</a>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">Date</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Balance</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12 Sep 2025</td>
            <td>ATM Withdrawal</td>
            <td><span class="badge bg-danger">Debit</span></td>
            <td>-$150</td>
            <td>$12,190</td>
            <td><span class="text-success">Successful</span></td>
          </tr>
          <tr>
            <td>11 Sep 2025</td>
            <td>Salary Deposit</td>
            <td><span class="badge bg-success">Credit</span></td>
            <td>+$1,500</td>
            <td>$12,340</td>
            <td><span class="text-success">Successful</span></td>
          </tr>
          <tr>
            <td>10 Sep 2025</td>
            <td>Bill Payment - Electricity</td>
            <td><span class="badge bg-danger">Debit</span></td>
            <td>-$120</td>
            <td>$10,840</td>
            <td><span class="text-warning">Pending</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Recent Transactions End -->

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