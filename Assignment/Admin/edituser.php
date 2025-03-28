<?php
session_start();
include 'dbc.php';

// Fetch user data
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM registration WHERE id = ?");
$stmt->bind_param("i", $id); 
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc(); // Fetch data as associative array

// Update user data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $selected_option = $_POST['gender'];
    $number = $_POST['phone'];
    $password = $_POST['password'];
    $membership = $_POST['membership'];

    // Prepare update statement using mysqli
    $stmt = $conn->prepare("UPDATE registration SET FirstName = ?, LastName = ?, Email = ?, Number = ?, Password = ?, Gender = ?, Plan = ? WHERE id = ?");
    $stmt->bind_param("sssssssi", $fname, $lname,$email, $number, $password, $selected_option, $membership,  $id);
    $stmt->execute();

    header("Location: manageaccount.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
    <form action="edituser.php?id=<?php echo $id; ?>" method="post">
        <div><h1>Update User Details</h1></div><br>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" >

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone">

            
            <label for="phone">Password:</label>
            <input type="password" id="password" name="password">


            <label>Gender:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
                <label><input type="radio" name="gender" value="other"> Other</label>
            </div><br>

            <label for="membership">Membership Plan:</label>
            <select id="membership" name="membership">
                <option value="Basic">Basic</option>
                <option value="Premium">Premium</option>
                <option value="Pro">Pro</option>
            </select> 
            
            <input type="submit" value="Update">
    </form>
</div>
</body>
</html>