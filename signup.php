<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <?php include('includes/links.php'); ?>
</head>

<body>
    <!-- header file -->
    <?php include('includes/header.php'); ?>
    <!-- End Header File -->
    <div class="container">
        <h2 class="heading">Student Registration Form</h2>
        <!-- database connection -->
        <?php
        include('server.php');
        ?>
        <!-- Signup  Form -->
        <form class="row" method="post" action="" enctype="multipart/form-data">
            <div class="col-md-6 offset-sm-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Type your Name">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Type your Email">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Type your Password">
            </div>
            <div class="col-md-6 offset-sm-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Type your Mobile">
            </div>

            <div class="col-md-6 offset-sm-3">
                <label for="address" class="form-label">Address</label>
                <textarea type="text" class="form-control" name="address" placeholder="Type your address here..."></textarea>
            </div>
            <div class="col-md-6 offset-sm-3">
                <label class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="image" placeholder="Upload Image">
            </div>
            <div class="col-12 offset-sm-3">
                <button type="submit" name="signup" class="btn btn-primary btn-gap">Sign up</button>
            </div>
        </form>
        <!-- End Signup  Form -->
    </div>


</body>

</html>