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

$student_name = $_POST['student_name'];
$student_password = $_POST['student_password'];

$sql = "SELECT * FROM student_register WHERE student_username = '$student_name' AND student_password = '$student_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Authentication successful
  session_start();
  $_SESSION['student_name'] = $student_name;
  echo"done login";
  // header('location: admin_dashboard.php');
} else {
  // Authentication failed
  echo "Invalid admin name or password";
}

$conn->close();
?>