<?php
    include "connectDB.php";
    // Kiểm tra nếu dữ liệu được gửi từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['cus_id'];
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        // Câu lệnh SQL để cập nhật thông tin khách hàng trong bảng customers
        $sql = "UPDATE customers 
                SET fullname = '$full_name', 
                    email = '$email', 
                    phone = '$phone', 
                    address = '$address'
                WHERE customer_id = $id";
        // Thực hiện truy vấn cập nhật
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: customers.php');
            exit();
        } else {
            echo "Lỗi khi cập nhật thông tin khách hàng: " . mysqli_error($conn);
        }
    } else {
        echo "Dữ liệu không hợp lệ.";
    }
?>