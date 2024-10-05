<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <?php include('includes/links.php'); ?>
</head>

<body>
  <!-- header file -->
  <?php include('includes/header.php'); ?>
  <!-- End Header File -->

  <h1 class="heading">Display Student Data</h1>

  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Password</th>
          <th>Address</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>

      <?php
      include('includes/connect.php');
      $q = "SELECT * FROM users";
      $query = mysqli_query($conn, $q);
      while ($row = mysqli_fetch_array($query)) {
        // echo $row['name'];
      ?>
        <tbody>
          <tr>
            <td>
              <img src="uploads/<?php echo $row['image']; ?>" alt="User Image" width="40" height="40" style="border-radius: 50%;">
              <?php echo $row['name']; ?>
            </td>

            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
              <?php
              $signupDate = date('d-m-Y', strtotime($row['created_at']));
              echo $signupDate;
              ?>
            </td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary">Edit</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger" onclick="return confirmDelete();">Delete</a>
            </td>
          </tr>
        </tbody>

      <?php
      }
      ?>
    </table>
  </div>



  <?php include('includes/footer.php');?>
</body>

</html>