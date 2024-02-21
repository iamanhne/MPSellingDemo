<?php
    include "connectDB.php";
    $sts_id = $_GET['status_id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    
    // Prepare the SQL statement
    $sql = "UPDATE statuses 
                SET name = ?, 
                    email = ?,
                    message = ?
                WHERE status_id = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters and execute
    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $message, $sts_id);
    mysqli_stmt_execute($stmt);
    
    // Check for successful update
    if(mysqli_affected_rows($conn) > 0) {
        // Redirect to brands.php upon successful update
        header('location:contact.php');
    } else {
        // Handle update failure
        // Redirect or display an error message
    }
    
    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>