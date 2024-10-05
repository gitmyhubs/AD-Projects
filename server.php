<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['signup'])) {
    // Fetching data from database
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];


    // Handling the image upload
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageFolder = 'uploads/' . $imageName;
    include('includes/connect.php');

    if (move_uploaded_file($imageTmpName, $imageFolder)) {
        $result = mysqli_query($conn, "insert into users(name,email,password,mobile,address,image)
       values('$name','$email','$password','$mobile','$address','$imageName')");

        if (mysqli_affected_rows($conn) == 1) {
            // echo "Student data inserted Successfully";
            echo '
        <div class="alert alert-success alert-dismissible fade show offset-sm-3 col-md-6" role="alert">
  <strong>Thankyou</strong> Your Data is Submitted Successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
            header('location:index.php');
        } else {
            // echo "Student data is not inserted";
            echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!!</strong> Try again Later.
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

// Contact Form submit Code

if(isset($_POST['contactUS']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    include('includes/connect.php');

    $insertQuery = mysqli_query($conn, "INSERT INTO contact (name,email,mobile,address,message) VALUES('$name', '$email', '$mobile', '$address', '$message')");

    if(mysqli_affected_rows($conn) == 1)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank You!!</strong> for contacting with us We will contact you...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!!</strong> Something Went Wrong Please Try Again...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}
?>