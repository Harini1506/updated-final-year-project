<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_application";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

$sql = "SELECT * FROM admin_register WHERE admin_username = '$admin_name' AND admin_password = '$admin_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Authentication successful
  session_start();
  $_SESSION['admin_name'] = $admin_name;
  
  header('location: admin_dashboard.php');
} else {
  // Authentication failed
  echo "Invalid admin name or password";
}

$conn->close();
?>