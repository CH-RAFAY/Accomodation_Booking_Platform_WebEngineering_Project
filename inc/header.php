<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">RestRiser</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?> me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'Rooms.php') ? 'active' : ''; ?> me-2" href="Rooms.php">Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'Facilities.php') ? 'active' : ''; ?> me-2" href="Facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contactUs.php') ? 'active' : ''; ?> me-2" href="contactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?> me-2" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'Ocassion.php') ? 'active' : ''; ?> me-2" href="Ocassion.php">Occasion Booking</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php if ($is_logged_in): ?>
                    <div class="user-name me-3 align-self-center">Welcome,
                        <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                    </div>
                    <?php if ($_SESSION['user_role'] == 'admin'): ?>
                        <a href="dashboard.php?view=admin" class="btn btn-outline-dark shadow-none me-lg-3 me-2">Admin Panel</a>
                    <?php endif; ?>
                    <a href="?logout=true" class="btn btn-outline-dark shadow-none me-lg-3 me-2">Logout</a>
                <?php else: ?>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Register</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="" novalidate>
                <div class="modal-header">
                    <h1 class="modal-title fs-3 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"
                        style="filter: invert(1);"></button>
                </div>
                <div class="modal-body">
                    <?php if (isset($error_message) && isset($_POST['login'])): ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control shadow-none" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" name="login" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                            Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="" novalidate>
                <div class="modal-header">
                    <h1 class="modal-title fs-3 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill"></i> User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"
                        style="filter: invert(1);"></button>
                </div>
                <div class="modal-body">
                    <?php if (isset($error_message) && isset($_POST['signup'])): ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <?php if (isset($simulate_email_message)): ?>
                        <div class="alert alert-success"><?php echo $simulate_email_message; ?></div>
                    <?php endif; ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control shadow-none"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" name="signup" class="btn btn-dark shadow-none">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Verification Modal Removed -->

<script>
    // Handle Mobile Menu Overlay Click to Close
    document.addEventListener('click', function(e) {
        const navContent = document.getElementById('navbarSupportedContent');
        const toggler = document.querySelector('.navbar-toggler');
        
        if (navContent && navContent.classList.contains('show')) {
            // If clicking the overlay background (not links) or clicking outside
            // Note: In our CSS, navContent IS the full screen overlay.
            if (e.target === navContent) {
                const bsCollapse = bootstrap.Collapse.getInstance(navContent);
                if (bsCollapse) {
                    bsCollapse.hide();
                } else {
                    navContent.classList.remove('show');
                }
            }
        }
    });

    document.querySelectorAll('.modal .btn-close').forEach(button => {
        button.addEventListener('click', function () {
            const modal = this.closest('.modal');
            modal.classList.remove('show');
            modal.style.display = 'none';
            document.querySelector('.modal-backdrop')?.remove();
            document.body.classList.remove('modal-open');
        });
    });

    document.querySelectorAll('a[href="javascript: void(0)"]').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            // Password reset functionality
        });
    });
</script>
