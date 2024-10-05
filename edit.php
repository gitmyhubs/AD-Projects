<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include('includes/connect.php');
$id = $_GET['id'];
$q = "SELECT * FROM users WHERE id=$id";
$query = mysqli_query($conn, $q);
$row = mysqli_fetch_array($query);
if (isset($_POST['edit'])) {
    // Fetching data from input boxes
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
   
    // Update user details in the database
    $q = "UPDATE users SET name='$name', email='$email', password='$password', mobile='$mobile', address='$address' WHERE id=$id";
    $query = mysqli_query($conn, $q);
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <?php include('includes/links.php'); ?>
</head>

<body>
    <!-- header file -->
    <?php include('includes/header.php'); ?>
    <!-- End Header File -->
    <h1 class="heading">Update Student Data</h1>
    <div class="container">
        <!-- Signup  Form -->

        <form class="row" method="post" action="">
            <div class="col-md-6 offset-sm-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php echo $row['password']; ?>" name="password">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" value="<?php echo $row['mobile']; ?>" name="mobile">
            </div>

            <div class="col-md-6 offset-sm-3">
                <label for="address" class="form-label">Address</label>
                <textarea type="text" class="form-control" name="address">
                <?php echo $row['address']; ?>
                </textarea>
            </div>

            <div class="col-12 offset-sm-3">
                <button type="submit" name="edit" class="btn btn-primary btn-gap">Update Data</button>
            </div>

        </form>
        <!-- End Signup  Form -->
    </div>

</body>

</html>