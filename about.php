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
  <title>About Page</title>
  <?php include('includes/links.php'); ?>
</head>

<body>

  <?php include('includes/header.php'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
        <h1 class="display-4">
                About 
                <img src="assets/images/ad-logo.png" alt="ADCLASS Logo" class="logo">
            </h1>
            <p class="lead">Discover Our Mission and Vision</p>
            <hr class="my-4">
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <div class="row mt-5">
        <!-- Mission Section  -->
        <div class="col-md-6 text-center">
            <img src="assets/images/mission.png" alt="Our Mission" class="img-fluid rounded mb-3" style="max-height: 300px;">
            <h2>Our Mission</h2>
            <p>In ADCLASS we are committed to meet your mission : WORLD-LEVEL Education tools and resources for students, future generation of TEACHers. We believe in enriching learning by democratizing education, making it more efficient and exciting at the same time. We bridge the gap between traditional methods of teaching and what learning should look like in today's environment, with cutting-edge solutions designed for an evolving educational landscape.</p>
        </div>
        
        <!-- Vision Section  -->
        <div class="col-md-6 text-center">
            <img src="assets/images/vision2.png" alt="Our Vision" class="img-fluid rounded mb-3" style="max-height: 300px;">
            <h2>Our Vision</h2>
            <p>Our vision is a world where education becomes an exciting, immersive process — for both learners and educators. Our mission is to help fill in the gaps at school by providing creative, collaborative and educationally innovative resources that are delivered right to your door from us. Our mission is to see a related future in the field of digital learning where education will be inclusive, engaging and Time adaptive as well.</p>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2>Meet Our Team</h2>
        </div>

        <div class="col-md-4 text-center">
            <img src="assets/images/team1.jpg" alt="Team Member 1" class="rounded-circle" width="150" height="150">
            <h5 class="mt-3">Piyush</h5>
            <p>Founder & CEO</p>
        </div>

        <div class="col-md-4 text-center">
            <img src="assets/images/team2.jpg" alt="Team Member 2" class="rounded-circle" width="150" height="150">
            <h5 class="mt-3">Piyush</h5>
            <p>Lead Developer</p>
        </div>

        <div class="col-md-4 text-center">
            <img src="assets/images/team3.jpg" alt="Team Member 3" class="rounded-circle" width="150" height="150">
            <h5 class="mt-3">Piyush</h5>
            <p>Marketing Head</p>
        </div>
    </div>
</div>






<?php include('includes/footer.php');?>
</body>

</html>