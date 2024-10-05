<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <?php include('includes/links.php'); ?>
</head>

<body>
  <!-- header file -->
  <?php include('includes/header.php'); ?>
  <!-- End Header File -->

  <div class="container my-4">
    <h1 class="text-center mb-4">Contact Us</h1>

    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6 mb-4">
      <?php include('server.php');?>
      
        <h2>Get in Touch</h2>
        <form action="" method="post">
          <div class="row">

            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Your Address" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Type Your Queries..." required></textarea>
          </div>

          <button type="submit" name="contactUS" class="btn btn-primary">Send Message</button>
        </form>
      </div>


      <!-- Contact Details -->
      <div class="col-md-6 mb-4">
        <h2 class="mb-4">Our Contact Details</h2>
        <div class="card p-3 shadow-lg border-0">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-container me-3">
              <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Address</h5>
              <p>Hurhuru Hazaribagh, Jharkhand </p>
            </div>
          </div>

          <div class="d-flex align-items-center mb-3">
            <div class="icon-container me-3">
              <i class="fas fa-phone-alt fa-2x text-success"></i>
            </div>
            <div>
              <h5 class="mb-1">Phone</h5>
              <p>+123 456 7890</p>
            </div>
          </div>

          <div class="d-flex align-items-center">
            <div class="icon-container me-3">
              <i class="fas fa-envelope fa-2x text-danger"></i>
            </div>
            <div>
              <h5 class="mb-1">Email</h5>
              <p>info@yourwebsite.com</p>
            </div>
          </div>
        </div>
      </div>


      <!-- Map Section -->
      <div class="row">
        <div class="col-12">
          <h2 class="text-center mb-4">Find Us Here</h2>
          <div class="custom-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.4379309946416!2d85.37098697397853!3d23.980307979913796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49d38534238ed%3A0xf8c015640ba31f15!2sPradhan%20Mantri%20Kaushal%20Kendra%20(Medhavi%20Foundation)!5e0!3m2!1sen!2sin!4v1726140842607!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
</body>

</html>