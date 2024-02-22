<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get input data
    $user = $_POST["username"];
    $pass = $_POST["password"];
    
    // Prepare SQL query
    $sql = "SELECT admin_name, admin_paasword FROM admin_register WHERE admin_name = ?";
    
    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    
    // Execute statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();
    
    // Check if user exists
    if ($result->num_rows > 0) {
        
        // Get user data
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($pass, $row["password"])) {
            
            // Start session and store user data
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            
            // Redirect to dashboard
            header("Location: dashboard.php");
            
        } else {
            
            // Invalid password
            $error = "Invalid username or password.";
            
        }
        
    } else {
        
        // Invalid username
        $error = "Invalid username or password.";
        
    }
    
    // Close statement
    $stmt->close();
    
}

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>