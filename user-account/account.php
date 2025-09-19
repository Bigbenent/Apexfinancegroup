<?php require_once "head.php" ?>
<style>
    /* Fintech Card Style */
.fintech-card {
  background: linear-gradient(135deg, #1b4253ff, #0cbbf5ff, #074e6dff);
  border-radius: 20px;
  position: relative;
  overflow: hidden;
  color: #fff;
}

/* Decorative abstract shapes */
.fintech-card .shape-circle {
  position: absolute;
  top: -40px;
  right: -40px;
  width: 120px;
  height: 120px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
}

.fintech-card .shape-triangle {
  position: absolute;
  bottom: -30px;
  left: -30px;
  width: 0;
  height: 0;
  border-left: 80px solid transparent;
  border-right: 80px solid transparent;
  border-top: 80px solid rgba(255, 255, 255, 0.08);
  transform: rotate(-15deg);
}

/* Balance text emphasis */
.fintech-card h2 {
  font-size: 2rem;
  letter-spacing: -0.5px;
}

/* Buttons */
.fintech-card .btn {
  border-radius: 50px;
  font-weight: 500;
  transition: 0.2s;
}
.fintech-card .btn:hover {
  transform: scale(1.05);
}

/* Action boxes (Fintech style) */
.fintech-action {
  background: #fff;
  border-radius: 20px;
  transition: all 0.25s ease-in-out;
  cursor: pointer;
}
.fintech-action:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.08);
}

/* Icon wrapper (rounded background) */
.icon-wrapper {
  width: 60px;
  height: 60px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  font-size: 1.5rem;
  color: #fff;
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
                <!-- Account Page Start -->
            <div class="container-fluid pt-4 px-4">
               <!-- Account Summary Card -->
<div class="row mb-4">
  <div class="col-12">
    <div class="account-summary-card fintech-card p-4 shadow-lg text-white position-relative overflow-hidden">
      <!-- Decorative shapes -->
      <div class="shape-circle"></div>
      <div class="shape-triangle"></div>

      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h6 class="fw-light opacity-75 mb-1">Account Balance</h6>
          <h2 class="fw-bold mb-0">NGN 120,340.50</h2>
          <p class="small mb-0">Savings Account</p>
        </div>
        <div class="text-end">
          <button class="btn btn-light btn-sm me-2 shadow-sm rounded-pill mt-2">Deposit</button>
          <button class="btn btn-outline-light btn-sm shadow-sm rounded-pill mt-2">Withdraw</button>
        </div>
      </div>

      <!-- Account details -->
      <div class="account-details mt-4 d-flex flex-wrap">
        <div class="me-4 mb-3">
          <small class="opacity-75">Account Number</small><br>
          <span class="fw-bold fs-6">12345678901</span>
        </div>
        <div class="me-4 mb-3">
          <small class="opacity-75">Account Type</small><br>
          <span class="fw-bold fs-6">Savings</span>
        </div>
        <div class="me-4 mb-3">
          <small class="opacity-75">Currency</small><br>
          <span class="fw-bold fs-6">NGN</span>
        </div>
        <div class="mb-3">
          <small class="opacity-75">Status</small><br>
          <span class="badge bg-success px-3 py-1 rounded-pill">Active</span>
        </div>
      </div>
    </div>
  </div>
</div>


                <!-- Actions / Quick Links -->
<div class="row mb-4 g-3">
  <div class="col-sm-6 col-md-3">
    <div class="action-box fintech-action text-center p-4">
      <div class="icon-wrapper bg-primary bg-gradient mb-3 shadow-sm">
        <i class="fa fa-exchange-alt"></i>
      </div>
      <p class="mb-0 fw-semibold">Transfer Money</p>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="action-box fintech-action text-center p-4">
      <div class="icon-wrapper bg-success bg-gradient mb-3 shadow-sm">
        <i class="fa fa-download"></i>
      </div>
      <p class="mb-0 fw-semibold">Download Statement</p>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="action-box fintech-action text-center p-4">
      <div class="icon-wrapper bg-warning bg-gradient mb-3 shadow-sm">
        <i class="fa fa-plus-circle"></i>
      </div>
      <p class="mb-0 fw-semibold">New Beneficiary</p>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="action-box fintech-action text-center p-4">
      <div class="icon-wrapper bg-danger bg-gradient mb-3 shadow-sm">
        <i class="fa fa-user-shield"></i>
      </div>
      <p class="mb-0 fw-semibold">Security</p>
    </div>
  </div>
</div>

                <!-- Recent Transactions Table -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="bg-white rounded-3 shadow-sm p-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0">Recent Transactions</h6>
                                <a href="transactions.php" class="text-primary small">View All →</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example rows; replace with backend-populated rows -->
                                        <tr>
                                            <td>18 Sep 2025</td>
                                            <td>Incoming Transfer</td>
                                            <td><span class="badge bg-success">Credit</span></td>
                                            <td>+ ₦50,000</td>
                                            <td>₦120,340</td>
                                            <td><span class="text-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>17 Sep 2025</td>
                                            <td>Electricity Bill</td>
                                            <td><span class="badge bg-danger">Debit</span></td>
                                            <td>− ₦7,500</td>
                                            <td>₦70,340</td>
                                            <td><span class="text-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>16 Sep 2025</td>
                                            <td>Loan Repayment</td>
                                            <td><span class="badge bg-danger">Debit</span></td>
                                            <td>− ₦15,000</td>
                                            <td>₦77,840</td>
                                            <td><span class="text-success">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

              

            <!-- Account Page End -->

        </div>
        <!-- Content End -->
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