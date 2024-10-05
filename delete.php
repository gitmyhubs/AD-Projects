<?php 
include('includes/connect.php');
$id = $_GET['id'];
$query = "DELETE FROM users WHERE id=$id";
mysqli_query($conn, $query);
header('location:index.php');


// //  If only logged-in users should have access to delete records
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }
// // Check if user is logged in
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// include('includes/connect.php');

// // Validate and sanitize the id
// $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// if ($id > 0) {
//     // Use prepared statements to prevent SQL injection
//     $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
//     $stmt->bind_param("i", $id);
//     $stmt->execute();

//     if ($stmt->affected_rows > 0) {
//         // Record deleted successfully
//         header('Location: index.php');
//         exit();
//     } else {
//         // Record not found or deletion failed
//         echo "Error: Unable to delete record.";
//     }

//     $stmt->close();
// } else {
//     echo "Invalid ID.";
// }

// $conn->close();



?>