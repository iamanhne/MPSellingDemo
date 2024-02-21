<?php
    session_start();
    include "connectDB.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    //Truy vấn SQL để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM admin_account WHERE username='".$username."' AND password='".$password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["logged_in"] = true;
        if(isset($_POST['username']) && !empty($_POST['username'])) {
            $username = $_POST['username'];
            // Thực hiện kiểm tra xác thực email ở đây nếu cần thiết
            // Lưu giá trị email vào session
            $_SESSION['username'] = $username;
        }
    // Đăng nhập thành công, chuyển hướng đến trang home.php
        header("Location: admin.php");
        exit();
    } else {
        // Sai tên đăng nhập hoặc mật khẩu
        echo "Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.";
    }
?>