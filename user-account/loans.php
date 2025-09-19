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
<!-- Loans & Credit — Main Body -->
<div class="container my-5">
  <div class="row g-4">

    <!-- Loan Products with Tabs -->
    <div class="col-lg-7">
      <div class="card mb-4 shadow-sm rounded-4 border-0">
        <div class="card-body p-4">
          <!-- Header -->
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h4 class="mb-1 fw-bold">Loans & Credit</h4>
              <p class="mb-0 text-muted">Borrow for emergencies, home improvements, education or business — fast decisions and clear repayment plans.</p>
            </div>
            <div class="text-end">
              <span class="small text-muted">Need help?</span><br>
              <a href="support.php" class="text-primary small">Contact Support</a>
            </div>
          </div>

          <!-- Tabs -->
          <ul class="nav nav-pills mt-3" id="loanTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active loan-type" data-type="personal" data-bs-toggle="pill" data-bs-target="#personal">Personal Loan</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link loan-type" data-type="salary" data-bs-toggle="pill" data-bs-target="#salary">Salary Advance</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link loan-type" data-type="business" data-bs-toggle="pill" data-bs-target="#business">Business Loan</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link loan-type" data-type="mortgage" data-bs-toggle="pill" data-bs-target="#mortgage">Mortgage</button>
            </li>
          </ul>

<!-- Tab Content -->
<div class="tab-content mt-4" id="loanTabContent">
  <!-- Personal Loan -->
  <div class="tab-pane fade show active" id="personal">
    <h5 class="fw-semibold">Personal Loan</h5>
    <p class="text-muted">Quick funds for emergencies, travel, or family needs. Repay flexibly over 3–24 months.</p>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#personalModal">Apply Now</button>
  </div>

  <!-- Salary Advance -->
  <div class="tab-pane fade" id="salary">
    <h5 class="fw-semibold">Salary Advance</h5>
    <p class="text-muted">Get part of your next paycheck instantly, repay automatically once salary arrives.</p>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#salaryModal">Request Advance</button>
  </div>

  <!-- Business Loan -->
  <div class="tab-pane fade" id="business">
    <h5 class="fw-semibold">Business Loan</h5>
    <p class="text-muted">Finance business growth, expansion, or working capital needs with structured repayment plans.</p>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#businessModal">Apply Now</button>
  </div>

  <!-- Mortgage -->
  <div class="tab-pane fade" id="mortgage">
    <h5 class="fw-semibold">Mortgage</h5>
    <p class="text-muted">Secure a home with flexible mortgage options, low rates, and up to 20 years repayment.</p>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#mortgageModal">Start Application</button>
  </div>
</div>
</div>
</div>

<!-- ===== Modals for Each Loan Type ===== -->

<!-- Personal Loan Modal -->
<div class="modal fade" id="personalModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title"><i class="fa fa-user me-2"></i> Apply for Personal Loan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="personalForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Loan Amount</label>
            <input type="number" class="form-control" placeholder="₦50,000 – ₦5,000,000" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Repayment Period</label>
            <select class="form-select" required>
              <option value="">Choose...</option>
              <option value="6">6 Months</option>
              <option value="12">12 Months</option>
              <option value="24">24 Months</option>
            </select>
          </div>
          <small class="text-muted">We will review your application and respond within 24 hours.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Salary Advance Modal -->
<div class="modal fade" id="salaryModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-info text-white rounded-top-4">
        <h5 class="modal-title"><i class="fa fa-briefcase me-2"></i> Request Salary Advance</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="salaryForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-semibold">Employee ID</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Advance Amount</label>
            <input type="number" class="form-control" placeholder="Max 50% of net salary" required>
          </div>
          <small class="text-muted">Repayment will be auto-deducted from your next salary.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Submit Request</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Business Loan Modal -->
<div class="modal fade" id="businessModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-dark text-white rounded-top-4">
        <h5 class="modal-title"><i class="fa fa-building me-2"></i> Apply for Business Loan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="businessForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-semibold">Business Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Loan Amount</label>
            <input type="number" class="form-control" placeholder="₦200,000 – ₦10,000,000" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Purpose</label>
            <textarea class="form-control" rows="2" placeholder="Working capital, expansion, etc." required></textarea>
          </div>
          <small class="text-muted">Business registration and financial statements required.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Mortgage Modal -->
<div class="modal fade" id="mortgageModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header bg-warning text-dark rounded-top-4">
        <h5 class="modal-title"><i class="fa fa-home me-2"></i> Mortgage Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="mortgageForm">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-semibold">Property Value</label>
            <input type="number" class="form-control" placeholder="Enter estimated property value" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Down Payment</label>
            <input type="number" class="form-control" placeholder="E.g. 20% of property value" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Preferred Term</label>
            <select class="form-select" required>
              <option value="60">5 years</option>
              <option value="120">10 years</option>
              <option value="240">20 years</option>
            </select>
          </div>
          <small class="text-muted">Proof of income and property documents required.</small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>


      <!-- Loan product details -->
      <div id="productDetails" class="card mb-4 rounded-4 shadow-sm border-0">
        <div class="card-body p-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h5 id="productTitle" class="mb-1 fw-semibold">Personal Loan</h5>
              <small id="productTag" class="text-muted">Flexible personal loans for day-to-day needs</small>
            </div>
            <div class="text-end">
              <span class="text-muted small">From</span>
              <div class="fw-bold fs-5" id="productApr">APR 12% - 24%</div>
            </div>
          </div>
          <div class="row mt-3 g-3">
            <div class="col-md-4"><div class="p-3 rounded-3 bg-light"><small class="text-muted">Min Amount</small><div id="minAmt" class="fw-semibold">₦ 10,000</div></div></div>
            <div class="col-md-4"><div class="p-3 rounded-3 bg-light"><small class="text-muted">Max Amount</small><div id="maxAmt" class="fw-semibold">₦ 5,000,000</div></div></div>
            <div class="col-md-4"><div class="p-3 rounded-3 bg-light"><small class="text-muted">Terms</small><div id="terms" class="fw-semibold">3 - 60 months</div></div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Loan Calculator -->
<div class="col-lg-5">
  <div class="card rounded-4 shadow-sm border-0 p-3">
    <div class="card-body">
      <h6 class="fw-semibold">Loan Calculator</h6>
      <p class="text-muted small">Estimate monthly payments and repayment schedule.</p>

      <form id="loanCalculatorForm" class="row g-2">
        <div class="col-12">
          <label class="form-label small">Loan Amount</label>
          <input id="calcAmount" type="number" class="form-control" min="1000" step="100" value="100000" required>
        </div>
        <div class="col-6">
          <label class="form-label small">Term (months)</label>
          <input id="calcTerm" type="number" class="form-control" min="1" max="360" value="12" required>
        </div>
        <div class="col-6">
          <label class="form-label small">APR (%)</label>
          <input id="calcApr" type="number" class="form-control" step="0.1" value="18">
        </div>
        <div class="col-12 mt-2">
          <button id="calcBtn" class="btn btn-primary w-100">Calculate</button>
        </div>
      </form>

      <!-- Results -->
      <div class="mt-3">
        <div class="d-flex justify-content-between">
          <div class="text-muted small">Estimated monthly payment</div>
          <div id="monthlyPayment" class="fw-bold fs-5">₦0</div>
        </div>
        <div class="text-muted small mt-1">Total repayment: <span id="totalRepayment">₦0</span></div>
        <div class="mt-3">
          <button type="button" class="btn btn-outline-secondary w-100 mb-2" id="showAmort">Show amortization</button>
          
        </div>
      </div>

      <!-- amortization preview -->
      <div id="amortPreview" class="mt-3" style="display:none;">
        <h6 class="small fw-semibold">Amortization (first 3 months)</h6>
        <ul id="amortList" class="list-group list-group-flush"></ul>
      </div>
    </div>
  </div>
</div>





<!-- Styles -->
<style>
  .loan-type.active { background:#1e3c72 !important; color:#fff !important; }
  .rounded-4 { border-radius:18px; }
  .shadow-sm { box-shadow:0 6px 20px rgba(32,40,60,0.06); }
</style>

<!-- JS -->
<!-- Loan Calculator Script -->
<script>
document.getElementById('loanCalculatorForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const amount = parseFloat(document.getElementById('calcAmount').value);
  const months = parseInt(document.getElementById('calcTerm').value);
  const apr = parseFloat(document.getElementById('calcApr').value) / 100 / 12; // monthly interest rate

  // amortization formula
  const monthlyPayment = (amount * apr) / (1 - Math.pow(1 + apr, -months));
  const totalRepayment = monthlyPayment * months;

  // Display results
  document.getElementById('monthlyPayment').innerText = `₦${monthlyPayment.toFixed(2)}`;
  document.getElementById('totalRepayment').innerText = `₦${totalRepayment.toFixed(2)}`;

  // Build amortization preview
  const amortList = document.getElementById('amortList');
  amortList.innerHTML = '';

  let balance = amount;
  for (let i = 1; i <= 3 && i <= months; i++) {
    const interest = balance * apr;
    const principal = monthlyPayment - interest;
    balance -= principal;

    const li = document.createElement('li');
    li.className = "list-group-item d-flex justify-content-between small";
    li.innerHTML = `<span>Month ${i}</span> <span>Principal: ₦${principal.toFixed(2)} | Interest: ₦${interest.toFixed(2)} | Balance: ₦${balance.toFixed(2)}</span>`;
    amortList.appendChild(li);
  }
});

document.getElementById('showAmort').addEventListener('click', function() {
  const amort = document.getElementById('amortPreview');
  amort.style.display = amort.style.display === 'none' ? 'block' : 'none';
});
</script>

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