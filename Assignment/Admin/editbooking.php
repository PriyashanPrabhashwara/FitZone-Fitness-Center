<?php

session_start();
include 'dbc.php';

// Fetch user data
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM book WHERE id = ?");
$stmt->bind_param("i", $id); 
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc(); // Fetch data as associative array

// Update user data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $selected_option = $_POST['gender'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $session = $_POST['session'];

    // Prepare update statement using mysqli
    $stmt = $conn->prepare("UPDATE book SET FullName = ?, Email = ?, Number = ?, Date = ?, Session = ?, Gender = ?  WHERE id = ?");
    $stmt->bind_param("ssssssi", $name, $email, $number,$date,$session, $selected_option, $id);
    $stmt->execute();

    header("Location: manageappoinment.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="Classform1.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="container">
        <div class="title">Update Appoinment</div>

        <form action="editbooking.php?id=<?php echo $id; ?>" method="post">
            <div class="user-details">

                <div class="input-box">

                <span class="details">Full Name</span>
                <input type="text" name="name" placeholder="Enter your name"required>

                </div>

                <div class="input-box">

                <span class="details">Email</span>
                <input type="text" name="email" placeholder="Enter your Email"required>
                
                </div>

                 <div class="input-box">

                <span class="details">Phone Number</span>
                <input type="text" name="number" placeholder="Enter your Number"required>
                
                </div>


                <div class="input-box">

                    <span class="details">Choose a date</span>
                    <input type="date" name="date" placeholder=""required>
                    </div>
                <div class="input-box">

                    <span class="details">Choose a session</span>
                    
                    <select name="session" >
                        <option value="Yoga"> Yoga</option>
                        <option value="Strength Training"> Strength Training</option>
                        <option value="Cardio"> Cardio</option>

                    </select>
                    </div>
            </div>

            <div class="gender-details">
                
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label>
                        
                        <input type="radio" name="gender" value="female">
                        <span class="gender">Female</span>
                        
                    </label>
                    <label >
                        <input type="radio" name="gender" value="male">
                        <span class="gender">Male</span>
                    </label>
                    <label>
                        <input type="radio" name="gender" value="other">
                        <span class="gender">Other</span>
                    </label>
                </div>
            </div>
           
                <button type="submit" class="book-now">Update</button>
        </form>
    </div>
</div>
</body>
</html>