<?php
    include "connectDB.php";
    // Kiểm tra nếu dữ liệu được gửi từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['prd_id'];
        $img_main = $_POST['Product_Image_Main'];
        $prd_name = $_POST['product_name'];
        $des = $_POST['description'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $brandid = $_POST['brandid'];
        $sql = "UPDATE products 
                SET product_img_main = '$img_main', 
                    product_name = '$prd_name', 
                    description = '$des',
                    color = '$color', 
                    price = '$price', 
                    quantity = '$quantity', 
                    brand_id = '$brandid'
                WHERE product_id = $id";
    
        // Thực hiện truy vấn cập nhật
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: products.php');
            exit();
        } else {
            echo "Lỗi khi cập nhật thông tin sản phẩm " . mysqli_error($conn);
        }
    } else {
        echo "Dữ liệu không hợp lệ.";
    }
?>