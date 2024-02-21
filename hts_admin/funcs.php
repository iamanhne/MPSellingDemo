<?php
    function checkAdminLoggedIn() {
        // Ở đây, bạn có thể thực hiện kiểm tra đăng nhập thông qua cookie, session, hoặc CSDL
    
        // Giả định: Nếu session 'logged_in' tồn tại và có giá trị là true
        // thì coi như đã đăng nhập và trả về tên người dùng
        session_start();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            include "connectDB.php"; // Kết nối đến cơ sở dữ liệu
            $user_name = $_SESSION['username']; // Lấy email từ session
            // Truy vấn SQL để lấy tên đầy đủ của người dùng dựa trên email
            $sql = "SELECT username FROM admin_account WHERE username='".$user_name."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $admin = $result->fetch_assoc();
                return $admin['username']; // Trả về tên đầy đủ của người dùng
            }
        } 
        else {
            return false; // Nếu chưa đăng nhập
        }
    }
?>