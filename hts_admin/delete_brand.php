<?php
    include 'connectDB.php';
    $brand_id = $_GET['id'];
    //$sql = "delete from brands where brand_id = $brand_id";
    $sql = "DELETE brands, products FROM brands
    LEFT JOIN products ON brands.brand_id = products.brand_id
    WHERE brands.brand_id = $brand_id";
    $result = mysqli_query($conn, $sql);
    header('location:brands.php');
?>