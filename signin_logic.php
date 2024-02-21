<?php
    session_start();
    include "connectDB.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Truy vấn SQL để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM customers WHERE email='".$email."' AND password='".$password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["logged_in"] = true;
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            // Thực hiện kiểm tra xác thực email ở đây nếu cần thiết
            // Lưu giá trị email vào session
            $_SESSION['email'] = $email;
        }
    // Đăng nhập thành công, chuyển hướng đến trang home.php
        header("Location: index.php");
        exit();
    } else {
        // Sai tên đăng nhập hoặc mật khẩu
        echo "Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.";
    }
?>