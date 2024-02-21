<?php
    include "connectDB.php";
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $sql = "insert into message_contact set name ='".$name."',email='".$email."',message='".$message."'";
    $result = mysqli_query($conn, $sql);
    header('location:contact_us.php');
?>