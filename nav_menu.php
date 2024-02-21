<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/nav_menu.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>H&T Store</title>
</head>
<body>
    <header class="container">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class='logo_img'>
        <img src="./assets/img/306615695_213823884327154_3270251366266778284_n-removebg-preview.png" alt="">
        </div>
        <a href="order_page.php" class="shopping">
            <div>
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Cart</span> 
            </div>
        </a>
        <?php
            include "funcs.php";
            $check = checkLoggedIn();
            if ($check) {
                // Nếu đã đăng nhập, hiển thị tên người dùng
                echo 
                '<div class="user_logged">'
                    .$check.'
                    <div class="user_logged_container">
                        <ul>
                            <li><a href="signin.php">Account</a></li><hr>
                            <li><a href="signup.php">Logout</a></li>
                        </ul>
                    </div>
                
                </div>';
            } else {
                // Nếu chưa đăng nhập, hiển thị link "Sign In"
                echo 
                '<div class="user">
                    <i class="fa-solid fa-user"></i>
                    Account
                    <div class="user_container">
                        <ul>
                            <li><a href="signin.php">Sign In</a></li><hr>
                            <li><a href="signup.php">Sign Up</a></li>
                        </ul>
                    </div>
                </div>';
            }
            
        ?>
    </header>  
    <nav class="nav">
        <ul class="nav_ul">
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li>
                <a href="products.php">
                    Products
                    <i class="ti-angle-down"></i>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="products.php?id=1">Iphone</a></li> <hr>
                            <li><a href="products.php?id=2">Realme</a></li> <hr>
                            <li><a href="products.php?id=3">Xiaomi</a></li> <hr>
                            <li><a href="products.php?id=11">Samsung</a></li>
                        </ul>
                    </div>
                </a>
            </li>
            <li><a href="contact_us.php">Contact us</a></li>
        </ul>
    </nav>
</body>
</html>