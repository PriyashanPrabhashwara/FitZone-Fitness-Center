
<?php
    $message="";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email= $_POST['email'];
        $selected_option = $_POST['gender'];
        $number = $_POST['number'];
        $membership= $_POST['membership'];
        $password = $_POST['password'];
        
        echo "<br>";

         // database connection
         include 'dbc.php';


            // Prepare an insert statement
            $stmt = $conn->prepare("INSERT INTO registration (FirstName,LastName,Email,Number,Password,Gender,Plan) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $fname,$lname,$email,$number,$password,$selected_option,$membership);

            // execute the statement
            if($stmt->execute()){
                $message="Registration Sucessful";
            }
            
            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form </title>
  <link rel="stylesheet" href="Register.css">

</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div class="title">FitZone Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form action="Registration.php" method="post">
        <div class="user-details">
          <!-- Input for First Name -->
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter your First name" required>
          </div>
          <!-- Input for Last Name -->
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last Name" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="number" placeholder="Enter your number" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <!-- Radio buttons for gender selection -->
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <!-- Label for Male -->
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <!-- Label for Female -->
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <!-- Label for Prefer not to say -->
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Other</span>
            </label>
          </div>
        </div>

        <!-- membership plans -->

        <label for="membership">Membership Plan:</label>
            <select id="membership" name="membership" required>
                <option value="">Select a Membership Plan</option>
                <option value="Basic">Basic</option>
                <option value="Premium">Premium</option>
                <option value="Pro">Pro</option>
            </select>

        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register">
        </div>

        <div style="display:flex;justify-content:space-around;">
          <p>Already Have an account</p>
          <a href="login.php">Sign-in</a>
        </div>
        <h2 style="text-align: center; color:brown; font-weight: bold;"><?php echo $message;?></h2>
      </form>
    </div>
  </div>
</body>
</html>