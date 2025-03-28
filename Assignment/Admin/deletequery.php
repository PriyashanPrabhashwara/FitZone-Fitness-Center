<?php
session_start();
include 'dbc.php'; // Include your database connection file

// Check if the user ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM query WHERE id = ?");
    $stmt->bind_param("i", $id); // Bind the user ID to the query
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        // If the user was successfully deleted, redirect to the admin menu
        header("Location: ManageQuery.php");
    } 

    $stmt->close(); // Close the prepared statement
} 

$conn->close(); // Close the database connection
?>