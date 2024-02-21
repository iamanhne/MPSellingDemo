<?php
    include "connectDB.php";
    
    $brand_id = $_GET['brand_id'];
    $brand_name = $_GET['brand_name'];
    $description = $_GET['description'];
    
    // Prepare the SQL statement
    $sql = "UPDATE brands 
                SET brand = ?, 
                    description = ?
                WHERE brand_id = ?";
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    // Bind parameters and execute
    mysqli_stmt_bind_param($stmt, "ssi", $brand_name, $description, $brand_id);
    mysqli_stmt_execute($stmt);
    // Check for successful update
    if(mysqli_affected_rows($conn) > 0) {
        // Redirect to brands.php upon successful update
        header('location:brands.php');
    } else {
        // Handle update failure
        // Redirect or display an error message
    }
    
    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>