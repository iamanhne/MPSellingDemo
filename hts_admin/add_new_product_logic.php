<?php
    include "connectDB.php";
    $prd_id = $_POST['prd_id'];
    $img_main = $_POST['Product_Image_Main'];
    $prd_name = $_POST['product_name'];
    $des = $_POST['description'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brandid = $_POST['brandid'];
    $sql = "INSERT INTO products (product_id, product_img_main, product_name, description, color, price, quantity, brand_id)
            VALUES (?,?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ssssssss',$prd_id, $img_main, $prd_name, $des, $color, $price, $quantity, $brandid);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result) {
            header('location: products.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
        mysqli_stmt_close($stmt);
    } else {
        echo "Statement preparation failed: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
?>
