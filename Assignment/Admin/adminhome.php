<?php
session_start();

?>

<?php
    
    include 'dbc.php'; // Database connection

  // Check if the user is logged in
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: Adminlogin.php");
    exit();
}

// Logout logic
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  session_destroy();
  header("Location: Adminlogin.php");
  exit();
}

    // Fetch all users from the database
    $sql1 = "SELECT * FROM registration ORDER BY id ASC";
    $sql2 = "SELECT * FROM query ORDER BY id ASC";
    $sql3 = "SELECT * FROM book ORDER BY date ASC";
    $sql4 = "SELECT * FROM shopform";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="Productview.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="manageaccount.css?v=<?php echo time(); ?>">
  
  
</head>
<body>


<!-- Navbar -->
<section class="menu">
            <div class="nav">
            <div class="logo"><h1>Fit<b>zone</b></h1></div>

            <ul>
                     <li><a class="active"href="Adminhome.php">Dashboard</a></li>
                    <li><a class="active"href="Manageaccount.php">Manage account</a></li>
                    <li><a class="active"href="Manageappoinment.php">Manage Appoinmets</a></li>
                    <li><a class="active"href="ManageQuery.php">Mange Queries</a></li>
                    <li><a class="active"href="Createstaffaccount.php">Create staff account</a></li>
            </ul>

            
            <div>
                <a href="adminlogin.php">Sign-In</a>
                <a href="adminhome.php?action=logout">Logout</a>
            </div>


    </section>

    <h1>Welcome to the Admin Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p><br>

    <div class="dashboard-content">
        <h2>Users Details</h2>
        
        <!-- User Table -->
        <table class="user-table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Plan</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result1->num_rows > 0): ?>
                    <?php while ($row = $result1->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Number']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Plan']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<br>
<br>

    <div class="dashboard-content">
        <h2>Booking Details</h2>
        
        <!-- booking Table -->
        <table class="user-table">
            <thead>
                <tr>
                <th>FullName</th>
                <th>Email</th>
                <th>Number</th>
                <th>Date</th>
                <th>Sesssion</th>
                <th>Gender</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result3->num_rows > 0): ?>
                    <?php while ($row = $result3->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['FullName']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Number']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
                        <td><?php echo $row['Session']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <br>
    <br>

    <div class="dashboard-content">
        <h2>Query Details</h2>
        
        <!-- booking Table -->
        <table class="user-table">
            <thead>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Query</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result2->num_rows > 0): ?>
                    <?php while ($row = $result2->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Query']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No queries found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
 
    <!-- Order details -->

    <div class="dashboard-content">
        <h2>Order Details</h2>
        
        <!-- booking Table -->
        <table class="user-table">
            <thead>
                <tr>
                <th>Email</th>
                <th>ProductName</th>
                <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result4->num_rows > 0): ?>
                    <?php while ($row = $result4->fetch_assoc()): ?>
                        <tr>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['ProductName']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No Orders found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <a href="adminhome.php?action=logout">Logout</a>


</body>
</html>