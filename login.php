<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    include('includes/connect.php');

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id']; // Store user ID in session
        $_SESSION['username'] = $row['name']; // Store username in session
        $_SESSION['profile_image'] = $row['image'];
        header('location:index.php');
        exit();
    } else {
        //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>Sorry!!</strong>Incorrect Email and Password!! Try Again...
        //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>';
        //         header('location:login.php');
        // Set error message in session
        $_SESSION['error_message'] = 'Incorrect Email and Password! Try Again...';
        header('location:login.php');
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <?php include('includes/links.php'); ?>
</head>

<body>
    <!-- header file -->
    <?php include('includes/header.php'); ?>
    <!-- End Header File -->
    <div class="container">
        <h1 class="heading">Student Login Form</h1>

        <!-- database connection -->
        <?php
        // Display error message if set
        if (isset($_SESSION['error_message'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show col-md-6 offset-sm-3" role="alert">'
                . '<strong>Sorry!!</strong> ' . $_SESSION['error_message'] . ' '
                . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                . '</div>';
            // Clear the error message after displaying
            unset($_SESSION['error_message']);
        }
        ?>

        <!-- Login Form -->
        <form class="row" method="post" action="">

            <div class="col-md-6 offset-sm-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Type your Email">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Type your Password">
            </div>

            <div class="col-12 offset-sm-3">
                <button type="submit" name="login" class="btn btn-primary btn-gap">Login</button>
            </div>
        </form>
        <!-- End Login Form -->
    </div>


</body>

</html>