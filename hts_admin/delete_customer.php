<?php
    include 'connectDB.php';
    // Lấy giá trị id từ biến $_GET
    $id = $_GET['id'];
    // Chuẩn bị câu lệnh SQL với tham số hóa
    $sql = "DELETE FROM customers WHERE customer_id = ?";
    // Chuẩn bị câu lệnh và kiểm tra lỗi
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán giá trị vào câu lệnh SQL
        mysqli_stmt_bind_param($stmt, "i", $id);
        // Thực thi câu lệnh
        mysqli_stmt_execute($stmt);
        // Kiểm tra kết quả
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('Location: customers.php');
            exit();
        } else {
            echo "Không có hàng nào bị xóa.";
        }
        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi khi chuẩn bị câu lệnh SQL: " . mysqli_error($conn);
    }  
    // Đóng kết nối
    mysqli_close($conn);
?>