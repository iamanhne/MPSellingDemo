<?php
    include "connectDB.php";
    $brand_name = $_GET['brand_name'];
    $description = $_GET['description'];
    // $sql = 'insert into brands(name, description) values ('.$brand_name.','.$description.')';
    $sql = "insert into brands set brand ='".$brand_name."',description='".$description."'";
    $result = mysqli_query($conn, $sql);
    header('location:brands.php');
?>