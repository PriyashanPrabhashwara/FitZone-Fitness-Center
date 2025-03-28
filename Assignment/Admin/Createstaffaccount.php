<?php

// Start a session
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: adminlogin.php");
    exit;
}

include 'dbc.php';

$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $username = $_POST['name'];
    $password = $_POST['password'];


    // Prepare and execute SQL statement to get the user by email
    $stmt = $conn->prepare("INSERT INTO staff (Username,Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username,$password);
    

    if($stmt->execute()){
        $message="Account Sucessfully Created";
    }

    // Close the database connection and the statement
    $stmt->close();
    $conn->close();
}
?>

<html>
<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="manageaccount.css?v=<?php echo time(); ?>">

</head>
<body>

<!-- Navbar -->
<section class="menu">
            <div class="nav">
            
            <ul>
                     <li><a class="active"href="Adminhome.php">Dashboard</a></li>
                    <li><a class="active"href="Manageaccount.php">Manage account</a></li>
                    <li><a class="active"href="Manageappoinment.php">Manage Appoinmets</a></li>
                    <li><a class="active"href="ManageQuery.php">Mange Queries</a></li>
                    <li><a class="active"href="Createstaffaccount.php">Create staff account</a></li>
            </ul>

            
            


    </section>

<div class="container" style="margin-top:140px;">
        <h2 style="color:coral;text-align:center;">Create Accounts</h2>
        <form action="Createstaffaccount.php" method="POST">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Submit"></input>
        </form>

        <!-- Display error message if exists -->  
        <h2 style="color: orangered;text-align:center;"><?php echo $message?></h2>     
    </div>
</body>
</html>