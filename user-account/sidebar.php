<div class="sidebar bg-white shadow-sm pe-4 pb-3">
    <nav class="navbar navbar-light">
        <!-- Brand -->
        <a href="index.php" class="navbar-brand mx-4 mb-4 d-flex align-items-center">
            <i class="fa fa-university text-primary me-2 fs-4"></i>
            <h4 class="text-primary mb-0">ApexFinance</h4>
        </a>

        <!-- User Info -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle border border-2 border-primary" src="img/user.jpg" alt="User"
                    style="width: 50px; height: 50px;">
                <span class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-white"
                    style="width: 12px; height: 12px;"></span>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 fw-bold">John Doe</h6>
                <small class="text-muted">Savings • NGN 120,000</small>
            </div>
        </div>

        <!-- Navigation -->
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link active" data-bs-toggle="tooltip" data-bs-placement="right" title="View your account overview">
                <i class="fa fa-home me-2 text-primary"></i>Dashboard
            </a>

            <a href="account.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Check balances and account details">
                <i class="fa fa-wallet me-2 text-success"></i>My Accounts
            </a>

            <a href="transfer.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Send money to other accounts">
                <i class="fa fa-exchange-alt me-2 text-warning"></i>Transfers
            </a>

            <a href="payments.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Pay bills and subscriptions">
                <i class="fa fa-credit-card me-2 text-danger"></i>Payments & Bills
            </a>

            <a href="transactions.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="View your transaction history">
                <i class="fa fa-list-alt me-2 text-info"></i>Transaction History
            </a>

            <a href="loans.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Apply for loans and credit services">
                <i class="fa fa-hand-holding-usd me-2 text-purple"></i>Loans & Credits
            </a>

            <a href="settings.php" class="nav-item nav-link" data-bs-toggle="tooltip" data-bs-placement="right" title="Manage your profile and security">
                <i class="fa fa-cog me-2 text-dark"></i>Settings
            </a>

            <a href="logout.php" class="nav-item nav-link text-danger fw-bold" data-bs-toggle="tooltip" data-bs-placement="right" title="Log out of your account">
                <i class="fa fa-sign-out-alt me-2"></i>Logout
            </a>
        </div>
    </nav>
</div>

<!-- Enable Bootstrap Tooltips -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>
