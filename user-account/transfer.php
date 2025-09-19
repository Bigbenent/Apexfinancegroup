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
             style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
            <h4 class="mb-0"><i class="fa fa-exchange-alt me-2"></i>Transfer Funds</h4>
        </div>
        <div class="card-body p-4">

            <!-- Tabs for Local / International -->
            <ul class="nav nav-pills justify-content-center mb-4" id="transferTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-4" id="local-tab" data-bs-toggle="pill" data-bs-target="#local" type="button" role="tab">
                        <i class="fa fa-home me-1"></i> Local Transfer
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4" id="international-tab" data-bs-toggle="pill" data-bs-target="#international" type="button" role="tab">
                        <i class="fa fa-globe me-1"></i> International Transfer
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="transferTabsContent">
                <!-- Local Transfer -->
                <div class="tab-pane fade show active" id="local" role="tabpanel">
                    <form id="localForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Recipient Bank</label>
                                <input type="text" class="form-control" id="localBank" placeholder="Enter bank name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Account Number</label>
                                <input type="text" class="form-control" id="localAccount" placeholder="Enter account number" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Recipient Name</label>
                                <input type="text" class="form-control" id="localName" placeholder="Auto-filled if valid">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Amount (₦)</label>
                                <input type="number" class="form-control" id="localAmount" placeholder="Enter amount" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Narration</label>
                                <textarea class="form-control" id="localNarration" rows="2" placeholder="Purpose of transfer"></textarea>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button type="button" class="btn btn-primary px-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#summaryModal" onclick="previewTransfer('local')">
                                    <i class="fa fa-eye me-2"></i> Preview Transfer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- International Transfer -->
                <div class="tab-pane fade" id="international" role="tabpanel">
                    <form id="internationalForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Recipient Bank (SWIFT Code)</label>
                                <input type="text" class="form-control" id="intBank" placeholder="Enter SWIFT code" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">IBAN / Account Number</label>
                                <input type="text" class="form-control" id="intAccount" placeholder="Enter IBAN or account number" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Recipient Name</label>
                                <input type="text" class="form-control" id="intName" placeholder="Full name of recipient">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Amount (USD)</label>
                                <input type="number" class="form-control" id="intAmount" placeholder="Enter amount" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Narration</label>
                                <textarea class="form-control" id="intNarration" rows="2" placeholder="Purpose of transfer"></textarea>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button type="button" class="btn btn-success px-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#summaryModal" onclick="previewTransfer('international')">
                                    <i class="fa fa-eye me-2"></i> Preview Transfer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Transfer Summary Modal -->
<div class="modal fade" id="summaryModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-primary text-white rounded-top-4">
                <h5 class="modal-title"><i class="fa fa-list-alt me-2"></i>Transfer Summary</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush" id="summaryDetails"></ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-paper-plane me-1"></i> Confirm & Send
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JS to populate modal -->
<script>
function previewTransfer(type) {
    let details = "";
    if (type === "local") {
        details = `
            <li class="list-group-item"><strong>Bank:</strong> ${document.getElementById("localBank").value}</li>
            <li class="list-group-item"><strong>Account No:</strong> ${document.getElementById("localAccount").value}</li>
            <li class="list-group-item"><strong>Name:</strong> ${document.getElementById("localName").value}</li>
            <li class="list-group-item"><strong>Amount:</strong> ₦${document.getElementById("localAmount").value}</li>
            <li class="list-group-item"><strong>Narration:</strong> ${document.getElementById("localNarration").value}</li>
        `;
    } else {
        details = `
            <li class="list-group-item"><strong>Bank (SWIFT):</strong> ${document.getElementById("intBank").value}</li>
            <li class="list-group-item"><strong>IBAN/Account:</strong> ${document.getElementById("intAccount").value}</li>
            <li class="list-group-item"><strong>Name:</strong> ${document.getElementById("intName").value}</li>
            <li class="list-group-item"><strong>Amount:</strong> $${document.getElementById("intAmount").value}</li>
            <li class="list-group-item"><strong>Narration:</strong> ${document.getElementById("intNarration").value}</li>
        `;
    }
    document.getElementById("summaryDetails").innerHTML = details;
}
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