<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .form-wrapper {
      min-height: 100vh;
    }

    /* Left Panel */
    .left-panel {
      position: relative;
      background: url('img/login.jpg') no-repeat center center/cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      color: #fff;
    }

    .left-panel::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 51, 102, 0.85); /* overlay blend */
      z-index: 1;
    }

    .left-panel .overlay {
      position: relative;
      z-index: 2;
    }

    .left-panel h1 {
      font-size: 2.2rem;
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

    /* Right Panel */
    .login-card {
      width: 100%;
      max-width: 420px;
      border-radius: 12px;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      border-radius: 8px;
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
          <h1>Welcome Back!</h1>
          <p>Securely access your ApexFinance account and manage your banking anytime, anywhere.</p>
          <ul>
            <li>✔ Safe & Secure Login</li>
            <li>✔ Fast Access to Your Dashboard</li>
            <li>✔ 24/7 Banking Support</li>
          </ul>
        </div>
      </div>

      <!-- Right Login Panel -->
      <div class="col-md-6 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow-lg p-4 login-card">
          <img src="img\logo.png" width="150" class="d-flex p-3 text-center" alt="">
          <h3 class="text-center mb-3">Sign In</h3>
          <form id="loginForm"  method="POST" action="backend/login.php">
            <div class="mb-3">
              <label class="form-label">Username or Email</label>
              <input type="text" class="form-control" placeholder="Enter username or email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                <span class="input-group-text" onclick="togglePassword()">
                  <i class="fas fa-eye" id="toggleIcon"></i>
                </span>
              </div>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <div>
                <input type="checkbox" id="remember"> <label for="remember">Remember me</label>
              </div>
              <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
          <p class="mt-3 text-center">Don’t have an account? <a href="register.php">Create one</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    function togglePassword() {
      const passwordField = document.getElementById("password");
      const toggleIcon = document.getElementById("toggleIcon");
      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      }
    }
  </script>
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