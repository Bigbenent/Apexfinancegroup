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
  <h3 class="fw-bold mb-4">💬 Support & Help Center</h3>

  <div class="row g-4">
    <!-- Left: FAQ & Help -->
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-question-circle text-primary me-2"></i> Frequently Asked Questions
          </h5>

          <!-- Search FAQ -->
          <div class="input-group mb-3">
            <input type="text" id="faqSearch" class="form-control" placeholder="Search FAQs (e.g. transfer, pin, loans)">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>

          <!-- FAQ List -->
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  How do I reset my transaction PIN?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body small text-muted">
                  Go to Settings → Security, enter your current password, and set a new 6-digit transaction PIN.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  How long do transfers take?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body small text-muted">
                  Local transfers reflect instantly; international wires may take 1–3 business days depending on the destination bank.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  What happens if my payment fails?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body small text-muted">
                  If a bill or transfer fails, your funds will be automatically reversed within minutes. Contact support if it takes longer.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <h5 class="fw-semibold mb-3">
            <i class="fa fa-envelope text-success me-2"></i> Contact Support
          </h5>
          <form id="supportForm">
            <div class="mb-3">
              <label class="form-label small">Subject</label>
              <input type="text" class="form-control" placeholder="E.g. Failed transfer, Loan inquiry" required>
            </div>
            <div class="mb-3">
              <label class="form-label small">Message</label>
              <textarea class="form-control" rows="4" placeholder="Explain your issue in detail..." required></textarea>
            </div>
            <button class="btn btn-primary w-100">Submit Request</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Right: Quick Access -->
    <div class="col-lg-4">
      <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body p-4 text-center">
          <i class="fa fa-headset fa-3x text-primary mb-3"></i>
          <h6 class="fw-bold">Live Chat Support</h6>
          <p class="small text-muted">Available 24/7 for urgent help.</p>
          <button class="btn btn-success w-100">Start Live Chat</button>
        </div>
      </div>

      <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body p-4 text-center">
          <i class="fa fa-phone-alt fa-3x text-success mb-3"></i>
          <h6 class="fw-bold">Call Us</h6>
          <p class="small text-muted">Mon–Fri, 8:00am – 6:00pm</p>
          <p class="fw-semibold">+234 800 123 4567</p>
        </div>
      </div>

      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 text-center">
          <i class="fa fa-envelope-open-text fa-3x text-warning mb-3"></i>
          <h6 class="fw-bold">Email Support</h6>
          <p class="small text-muted">Replies within 24hrs</p>
          <p class="fw-semibold">support@fintechapp.com</p>
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