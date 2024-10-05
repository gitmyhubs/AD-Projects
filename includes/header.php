<?php
// Check if session is not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user_id'])) {
    // Prevent caching of logged-in pages
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">
            <img src="assets/images/ad-logo.png" alt="" class="logo">
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./about.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blogs
                    </a>
                    <ul class="dropdown-menu dropdown-hover">
                        <li><a class="dropdown-item" href="blog.php">Blog Home</a></li>
                        <li><a class="dropdown-item" href="blog-post.php">Blog Description</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./contact.php">Contact</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <?php if (isset($_SESSION['username'])): ?>
                    <!-- Profile section -->
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            $profileImage = isset($_SESSION['profile_image']) && !empty($_SESSION['profile_image'])
                                ? 'uploads/' . $_SESSION['profile_image'] // Ensure it points to 'uploads/' folder
                                : 'assets/images/user.png';
                            ?>
                            <img src="<?php echo htmlspecialchars($profileImage); ?>" alt="Profile" class="rounded-circle" width="40" height="40">

                            <span class="ms-2"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end profile-dropdown-menu" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>

                    </div>
                <?php else: ?>
                    <a href="login.php" class="btn btn-outline-success">Login</a>&nbsp;&nbsp;
                    <a href="signup.php" class="btn btn-outline-danger">Signup</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</nav>