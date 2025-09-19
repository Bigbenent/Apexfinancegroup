<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apexfinance group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
 <style>
    body { background: #f8f9fa; }
    .form-wrapper { min-height: 100vh; }
    .left-panel {
  position: relative;
  background: url('img/login.jpg') no-repeat center center/cover; /* background image */
  min-height: 100vh; /* full height */
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  color: #fff;
}

.left-panel::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: rgba(0, 51, 102, 0.85); /* #003366 blend with opacity */
  z-index: 1;
}

.left-panel .overlay {
  position: relative;
  z-index: 2; /* keep text above overlay */
}

.left-panel h2 {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 15px;
}

.left-panel ul {
  list-style: none;
  padding-left: 0;
}

.left-panel ul li {
  margin-bottom: 10px;
  font-size: 1rem;
}

    .step-card { display: none; }
    .step-card.active { display: block; }
    .nav-tabs .nav-link.active { font-weight: bold; color: #0d6efd; }
    .toggle-password {
  position: absolute;
  right: 15px;
  top: 65%;
  transform: translateY(-50%);
  cursor: pointer;
  color: #666;
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

 <div class="container-fluid form-wrapper">
    <div class="row">
<!-- Left Info Panel -->
<div class="col-md-6 d-flex flex-column justify-content-center left-panel text-white">
  <div class="overlay">
    <h1>Start Banking with Us</h1>
    <p>Create your ApexFinance account in just a few steps and enjoy secure, fast, and reliable banking services.</p>
    <ul>
      <li>✔ Secure Banking Platform – advanced encryption to protect your funds</li>
      <li>✔ Fast Transfers – send & receive money instantly</li>
      <li>✔ 24/7 Access – manage your finances anytime, anywhere</li>
    </ul>
  </div>
</div>


<!-- Right Form Panel -->
<div class="col-md-6 bg-white d-flex align-items-center justify-content-center">
  <div class="card shadow-lg rounded-4 w-75 my-4">
    <div class="card-body p-4">
      <h4 class="text-center mb-3">Create Your Account</h4>

      <!-- Step Tabs -->
      <ul class="nav nav-tabs mb-3 justify-content-between">
        <li class="nav-item"><a class="nav-link active">Personal Info</a></li>
        <li class="nav-item"><a class="nav-link">Contact</a></li>
        <li class="nav-item"><a class="nav-link">Account Setup</a></li>
        <li class="nav-item"><a class="nav-link">Security</a></li>
      </ul>

      

      <p class="mt-3 text-center">Already have an account? <a href="login.php">Sign in instead</a></p>
    </div>
  </div>
</div>

<!-- Progress bar -->
<div class="progress my-3">
  <div id="formProgress" class="progress-bar bg-success" role="progressbar"
       style="width: 25%">Step 1 of 4</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll(".step-card");
  const nextBtns = document.querySelectorAll(".next-btn");
  const prevBtns = document.querySelectorAll(".prev-btn");
  const progressBar = document.getElementById("formProgress");
  let currentStep = 0;

  function showStep(step) {
    steps.forEach((s, i) => {
      if (i === step) {
        s.classList.add("active");
        // enable inputs in active step
        s.querySelectorAll("input, select").forEach(el => el.disabled = false);
      } else {
        s.classList.remove("active");
        // disable inputs in hidden steps
        s.querySelectorAll("input, select").forEach(el => el.disabled = true);
      }
    });

    // update progress bar
    const percent = ((step + 1) / steps.length) * 100;
    progressBar.style.width = percent + "%";
    progressBar.textContent = `Step ${step + 1} of ${steps.length}`;
  }

  nextBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    });
  });

  prevBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    });
  });

  // init first step
  showStep(currentStep);
});
</script>

        
    </div>

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).on("click", ".toggle-password", function() {
    let input = $($(this).attr("toggle"));
    let icon = $(this).find("i");

    if (input.attr("type") === "password") {
        input.attr("type", "text");
        icon.removeClass("fa-eye-slash").addClass("fa-eye");
    } else {
        input.attr("type", "password");
        icon.removeClass("fa-eye").addClass("fa-eye-slash");
    }
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
<?php
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo "toastr.error('" . addslashes($error) . "');";
    }
    unset($_SESSION['errors']);
}

if (isset($_SESSION['success'])) {
    echo "toastr.success('" . addslashes($_SESSION['success']) . "');";
    unset($_SESSION['success']);
}
?>
</script>
</body>
</html>
