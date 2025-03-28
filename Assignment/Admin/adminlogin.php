<?php
session_start();

// Hardcoded credentials
$adminUsername = "priya";
$adminPassword = "12345";



// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Set session variable to indicate successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect to the dashboard
        header("Location: adminhome.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="adminlogin.php" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Login</button>
    </form>
    <?php
      // Display error message if login failed
      if (isset($error)) {
          echo "<p class='error'>$error</p>";
      }
    ?>
  </div>
</body>
</html>