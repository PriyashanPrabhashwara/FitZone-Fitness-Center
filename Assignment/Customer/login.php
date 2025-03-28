<?php

// Start a session
session_start();

include 'dbc.php';
$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL statement to get the user by email
    $sql = "SELECT * FROM registration WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email,$password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
       
        $_SESSION['user_email'] = $_POST['email'];
        header("Location: FitZone Fitness Center.php");
        exit(); 

    } else {
        $message = "Invalid Login";
    }
    // Close the database connection
    $conn->close();
}
?>


<html>
<head>

    <title>User-Login</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">

</head>
<body>


<div class="container" style="margin-top:140px;">
        <h2 style="color:coral;text-align:center;">Member Login</h2>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login"></input>
        </form>

        <!-- Display error message if exists -->
        <h2 style="color: orangered;text-align:center;"><?php echo $message?></h2>
</div>
    
</body>
</html>