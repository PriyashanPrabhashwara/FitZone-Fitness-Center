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

        $product = $_POST['product'];
        $email= $_POST['email'];
        $quantity= $_POST['quantity'];
        
        echo "<br>";

         // database connection
         include 'dbc.php';


            // Prepare an insert statement
            $stmt = $conn->prepare("INSERT INTO shopform (Email,ProductName,Quantity) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email,$product,$quantity);

            // execute the statement
            if($stmt->execute()){
                $message="Order Sucessful";
            }
            
            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Order Form</title>
    <link rel="stylesheet" href="shopform.css">
</head>
<body>
    <div class="form-container">
        <h2>Order Form</h2>
        <form action="shopform.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="product">Product Name:</label>
            <input type="text" id="product" name="product" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            
            <button type="submit">Submit Order</button>
            <h2 style="text-align: center; color:brown; font-weight: bold;"><?php echo $message;?></h2>
        </form>
    </div>
</body>
</html>