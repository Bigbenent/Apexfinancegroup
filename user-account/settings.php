<?php require_once "head.php" ?>
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
<div class="container py-4">
  <h3 class="fw-bold mb-4">⚙️ Settings</h3>

  <div class="row g-4">
    <!-- Profile -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-user-circle text-primary me-2"></i> Profile Information
          </h5>
          <form>
            <div class="mb-3 text-center">
              <img src="assets/img/avatar.png" alt="Profile" class="rounded-circle border shadow-sm" width="100" height="100">
              <div class="mt-2">
                <input type="file" class="form-control form-control-sm" accept="image/*">
              </div>
              <small class="text-muted">Upload a clear photo (JPG/PNG, max 2MB)</small>
            </div>
            <div class="mb-3">
              <label class="form-label small">Full Name</label>
              <input type="text" class="form-control" value="John Doe">
            </div>
            <div class="mb-3">
              <label class="form-label small">Email</label>
              <input type="email" class="form-control" value="john.doe@email.com">
            </div>
            <div class="mb-3">
              <label class="form-label small">Phone Number</label>
              <input type="text" class="form-control" value="+234 800 000 0000">
            </div>
            <button class="btn btn-primary w-100">Save Changes</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Security -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-lock text-danger me-2"></i> Security
          </h5>
          <form>
            <div class="mb-3">
              <label class="form-label small">Current Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label small">New Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label small">Update 6-digit Transaction PIN</label>
              <input type="password" class="form-control" maxlength="6" pattern="\d{6}" placeholder="Enter new 6-digit PIN">
              <small class="text-muted">Used for confirming transactions</small>
            </div>
            <button class="btn btn-danger w-100">Update Security</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Linked Accounts -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-credit-card text-success me-2"></i> Linked Accounts & Cards
          </h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              **** **** **** 1234 (Visa)
              <button class="btn btn-sm btn-outline-danger">Remove</button>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              **** **** **** 5678 (Mastercard)
              <button class="btn btn-sm btn-outline-danger">Remove</button>
            </li>
          </ul>
          <button class="btn btn-success w-100 mt-3">+ Add New Card</button>
        </div>
      </div>
    </div>

    <!-- Privacy & Danger Zone -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-user-shield text-secondary me-2"></i> Privacy & Account
          </h5>
          <div class="mb-3">
            <label class="form-label small">Active Sessions</label>
            <ul class="list-group">
              <li class="list-group-item small">Chrome - Lagos, Nigeria <span class="badge bg-success">Active</span></li>
              <li class="list-group-item small">iPhone App - Abuja, Nigeria</li>
            </ul>
          </div>
          <button class="btn btn-outline-secondary mb-3 w-100">Log out from all devices</button>
          <div class="border-top pt-3">
            <h6 class="text-danger fw-bold">Danger Zone</h6>
            <p class="small text-muted">Closing your account will permanently remove your data and linked services.</p>
            <button class="btn btn-danger w-100">Close Account</button>
          </div>
        </div>
      </div>
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