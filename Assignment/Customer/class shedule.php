<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_email'])) {
   
    // Redirect to login page if not logged in
    
    header("Location: login.php");
    exit();
}
?>



<?php
    $message="";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email= $_POST['email'];
        $selected_option = $_POST['gender'];
        $number = $_POST['number'];
        $date = $_POST['date'];
        $session = $_POST['session'];
        
        echo "<br>";

         // database connection
         include 'dbc.php';


            // Prepare an insert statement
            $stmt = $conn->prepare("INSERT INTO book (FullName,Email,Number,Date,Session,Gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name,$email,$number,$date,$session,$selected_option);

            // execute the statement
            if($stmt->execute()){
                $message="Reservation Sucessful";
            }
            
            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
 
?>


<!-- class shedule plans -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Class shedule.css">
    <title>Class form</title>

</head>
<body>
    <div class="container">
        <div class="title"> Class Reservation</div>

        <form action="class shedule.php" method="post">
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
           
                <button type="submit" class="book-now">Book now</button>
                <h2 style="text-align: center; color:brown; font-weight: bold;"><?php echo $message;?></h2>
        </form>
    </div>

</body>
</html>


