<form class="d-flex" role="search">
    <?php if (isset($_SESSION['username'])): ?>
        <span class="btn btn-outline-info"><?php echo htmlspecialchars($_SESSION['username']); ?></span>&nbsp;&nbsp;
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    <?php else: ?>
        <a href="login.php" class="btn btn-outline-success">Login</a>&nbsp;&nbsp;
        <a href="signup.php" class="btn btn-outline-danger">Signup</a>
    <?php endif; ?>
</form>

<!-- profile section on header -->
<form class="d-flex" role="search">
    <?php if (isset($_SESSION['username'])): ?>
        <!-- Profile section -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/user.png" alt="Profile" class="rounded-circle" width="40" height="40">
                <span class="ms-2"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
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





    <?php
session_start();

if (isset($_POST['signup'])) {
    // Fetching data from form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    // Handling the image upload
    $imageName = $_FILES['image']['name']; // Get the image name
    $imageTmpName = $_FILES['image']['tmp_name']; // Get the temporary file path
    $imageFolder = 'uploads/' . $imageName; // Define the folder where the image will be stored

    include('includes/connect.php'); // connecting to database

    // Move the uploaded image to the 'uploads' directory
    if (move_uploaded_file($imageTmpName, $imageFolder)) {
        // Insert data into the database, including the image path
        $result = mysqli_query($conn, "INSERT INTO users (name, email, password, mobile, address, image) 
            VALUES ('$name', '$email', '$password', '$mobile', '$address', '$imageName')");

        if (mysqli_affected_rows($conn) == 1) {
            echo '
            <div class="alert alert-success alert-dismissible fade show offset-sm-3 col-md-6" role="alert">
                <strong>Thank you!</strong> Your data has been submitted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            header('location:index.php');
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> Something went wrong. Please try again later.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    } else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Failed to upload image. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
}
