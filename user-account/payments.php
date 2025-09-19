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
<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient text-white text-center py-3"
             style="background: linear-gradient(135deg, #283e51, #485563);">
            <h4 class="mb-0"><i class="fa fa-credit-card me-2"></i> Bills & Payments</h4>
        </div>

        <div class="card-body p-4">
            <!-- Bill Categories -->
            <h5 class="fw-semibold mb-3">Choose a Service</h5>
            <div class="row g-3 text-center mb-4">
                <div class="col-6 col-md-3">
                    <div class="bill-box bg-light rounded-4 p-3 shadow-sm h-100 cursor-pointer">
                        <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                        <p class="fw-semibold mb-0">Airtime</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bill-box bg-light rounded-4 p-3 shadow-sm h-100 cursor-pointer">
                        <i class="fa fa-wifi fa-2x text-success mb-2"></i>
                        <p class="fw-semibold mb-0">Data</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bill-box bg-light rounded-4 p-3 shadow-sm h-100 cursor-pointer">
                        <i class="fa fa-bolt fa-2x text-warning mb-2"></i>
                        <p class="fw-semibold mb-0">Electricity</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bill-box bg-light rounded-4 p-3 shadow-sm h-100 cursor-pointer">
                        <i class="fa fa-tv fa-2x text-danger mb-2"></i>
                        <p class="fw-semibold mb-0">Cable TV</p>
                    </div>
                </div>
            </div>

            <!-- Payment Form -->
            <h5 class="fw-semibold mb-3">Payment Details</h5>
            <form id="billForm">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Select Service Provider</label>
                        <select class="form-select" id="provider" required>
                            <option value="">-- Choose Provider --</option>
                            <option value="mtn">MTN</option>
                            <option value="glo">Glo</option>
                            <option value="airtel">Airtel</option>
                            <option value="9mobile">9mobile</option>
                            <option value="ikeja-electric">Ikeja Electric</option>
                            <option value="dstv">DSTV</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Account / Phone Number</label>
                        <input type="text" class="form-control" id="accountNumber" placeholder="Enter account or phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Narration</label>
                        <input type="text" class="form-control" id="narration" placeholder="Optional (e.g. Electricity bill)">
                    </div>
                    <div class="col-md-12 text-center mt-4">
                        <button type="button" class="btn btn-primary px-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#billSummaryModal" onclick="previewBill()">
                            <i class="fa fa-eye me-2"></i> Preview Payment
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bill Payment Summary Modal -->
<div class="modal fade" id="billSummaryModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-dark text-white rounded-top-4">
                <h5 class="modal-title"><i class="fa fa-list-alt me-2"></i> Payment Summary</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush" id="billSummaryDetails"></ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-paper-plane me-1"></i> Confirm & Pay
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JS to Populate Modal -->
<script>
function previewBill() {
    const provider = document.getElementById("provider").value;
    const account = document.getElementById("accountNumber").value;
    const amount = document.getElementById("amount").value;
    const narration = document.getElementById("narration").value;

    let details = `
        <li class="list-group-item"><strong>Provider:</strong> ${provider}</li>
        <li class="list-group-item"><strong>Account/Phone:</strong> ${account}</li>
        <li class="list-group-item"><strong>Amount:</strong> ₦${amount}</li>
        <li class="list-group-item"><strong>Narration:</strong> ${narration || 'N/A'}</li>
    `;
    document.getElementById("billSummaryDetails").innerHTML = details;
}
</script>

            </div>
            <!-- Blank End -->


   <?php require_once "bottom-navbar.php" ?>
        </div>
        <!-- Content End -->

    </div>


    <!-- JS to Populate Modal + Validation + Handler -->
<script>
function previewBill() {
    const provider = document.getElementById("provider").value.trim();
    const account = document.getElementById("accountNumber").value.trim();
    const amount = document.getElementById("amount").value.trim();
    const narration = document.getElementById("narration").value.trim();

    // Validation
    if (!provider) {
        alert("Please select a service provider.");
        return;
    }
    if (!account || account.length < 6) {
        alert("Please enter a valid account/phone number.");
        return;
    }
    if (!amount || isNaN(amount) || amount <= 0) {
        alert("Please enter a valid amount greater than 0.");
        return;
    }

    // Populate modal preview
    let details = `
        <li class="list-group-item"><strong>Provider:</strong> ${provider}</li>
        <li class="list-group-item"><strong>Account/Phone:</strong> ${account}</li>
        <li class="list-group-item"><strong>Amount:</strong> ₦${amount}</li>
        <li class="list-group-item"><strong>Narration:</strong> ${narration || 'N/A'}</li>
    `;
    document.getElementById("billSummaryDetails").innerHTML = details;

    // Open modal programmatically (in case button is bypassed)
    let myModal = new bootstrap.Modal(document.getElementById('billSummaryModal'));
    myModal.show();
}

// Temporary handler for confirming payment
document.addEventListener("DOMContentLoaded", () => {
    const confirmBtn = document.querySelector("#billSummaryModal .btn-success");
    confirmBtn.addEventListener("click", () => {
        // Simulate success
        alert("✅ Payment successful! Your transaction has been processed.");
        
        // Reset form
        document.getElementById("billForm").reset();

        // Close modal
        let modalEl = document.getElementById("billSummaryModal");
        let modal = bootstrap.Modal.getInstance(modalEl);
        modal.hide();
    });
});
</script>

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