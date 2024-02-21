<?php
    include "connectDB.php";
    $customer_name = $_POST['fullname'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $customer_address = $_POST['address'];
    $customer_password = $_POST['password'];
    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO customers SET fullname=?, email=?, phone=?, address=?, password=?";
    $stmt = mysqli_prepare($conn, $sql);
    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'sssss', $customer_name, $customer_email, $customer_phone, $customer_address, $customer_password);
    // Execute the statement
    $result = mysqli_stmt_execute($stmt);
    // Check for success
    if ($result) {
        header('location: customers.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
