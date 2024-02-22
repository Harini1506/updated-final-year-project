<?php
// Connect to database
$host = "localhost";
$user = "root";
$password = "";
$database = "placement_application";
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$companyName = $_POST['companyName'];
$companyAddress = $_POST['companyAddress'];
$companyWebsite = $_POST['companyWebsite'];
$jobPosition = $_POST['jobPosition'];
$description = $_POST['description'];
$interviewPreferences = $_POST['interviewPreferences'];
$eligibility = $_POST['eligibility'];

// Insert form data into database
$sql = "INSERT INTO company_register (company_name, company_address, company_website, job_position, job_description, interview_preferences, eligibility) VALUES ('$companyName', '$companyAddress', '$companyWebsite', '$jobPosition', '$description', '$interviewPreferences', '$eligibility')";

// Check if query was successful 
if (mysqli_query($conn, $sql)) { echo "
 recorded successfully"; } else { echo "Error: " . $sql . "<br>" . mysqli_error($conn); }

// Close connection 
mysqli_close($conn); ?>
