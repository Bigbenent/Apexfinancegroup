<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 shadow-sm" id="mainNavbar">
    <!-- Brand (mobile only) -->
    <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-university"></i></h2>
    </a>

    <!-- Sidebar Toggle -->
    <a href="#" class="sidebar-toggler flex-shrink-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Toggle Sidebar">
        <i class="fa fa-bars"></i>
    </a>

    <!-- Search -->
    <form class="d-none d-md-flex ms-4">
        <input class="form-control border-0 shadow-sm rounded-pill px-3" type="search" placeholder="Search transactions, users..." aria-label="Search">
    </form>

    <!-- Right Nav -->
    <div class="navbar-nav align-items-center ms-auto">

        <!-- Dark Mode Toggle -->
        <div class="nav-item d-flex align-items-center me-3">
            <button id="darkModeToggle" class="btn btn-outline-secondary rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Toggle Dark Mode">
                <i class="fa fa-moon"></i>
            </button>
        </div>

        <!-- Notifications -->
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-placement="bottom" title="Notifications">
                <i class="fa fa-bell me-lg-2 text-warning"></i>
                <span class="d-none d-lg-inline-flex">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-white border-0 shadow rounded-3 m-0 p-2">
                <a href="#" class="dropdown-item py-2">
                    <h6 class="fw-normal mb-0">Profile updated</h6>
                    <small class="text-muted">10 mins ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item py-2">
                    <h6 class="fw-normal mb-0">New user registered</h6>
                    <small class="text-muted">30 mins ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-center text-primary fw-bold">See all notifications</a>
            </div>
        </div>

        <!-- User Profile -->
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-placement="bottom" title="My Account">
                <img class="rounded-circle me-2 border border-2 border-primary" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex fw-bold">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-white border-0 shadow rounded-3 m-0">
                <a href="account.php" class="dropdown-item"><i class="fa fa-user me-2 text-primary"></i>My Profile</a>
                <a href="settings.php" class="dropdown-item"><i class="fa fa-cog me-2 text-secondary"></i>Settings</a>
                <hr class="dropdown-divider">
                <a href="logout.php" class="dropdown-item text-danger fw-bold"><i class="fa fa-sign-out-alt me-2"></i>Log Out</a>
            </div>
        </div>
    </div>
</nav>

<!-- Enable Tooltips & Dark Mode -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Enable tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Dark Mode Toggle
        const toggleBtn = document.getElementById("darkModeToggle");
        const body = document.body;
        const navbar = document.getElementById("mainNavbar");

        // Load preference from localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            body.classList.add("dark-mode");
            navbar.classList.remove("bg-light", "navbar-light");
            navbar.classList.add("bg-dark", "navbar-dark");
            toggleBtn.innerHTML = '<i class="fa fa-sun"></i>';
        }

        toggleBtn.addEventListener("click", function () {
            body.classList.toggle("dark-mode");
            navbar.classList.toggle("bg-dark");
            navbar.classList.toggle("navbar-dark");
            navbar.classList.toggle("bg-light");
            navbar.classList.toggle("navbar-light");

            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("darkMode", "enabled");
                toggleBtn.innerHTML = '<i class="fa fa-sun"></i>';
            } else {
                localStorage.setItem("darkMode", "disabled");
                toggleBtn.innerHTML = '<i class="fa fa-moon"></i>';
            }
        });
    });
</script>

<!-- Dark Mode Styles -->
<style>
    body.dark-mode {
        background-color: #121212;
        color: #fff;
    }
    body.dark-mode .card,
    body.dark-mode .dropdown-menu {
        background-color: #1e1e1e !important;
        color: #fff !important;
    }
    body.dark-mode .form-control {
        background-color: #2b2b2b;
        border-color: #444;
        color: #fff;
    }
</style>
