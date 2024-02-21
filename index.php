<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/73a0f52767.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./assets/img/306615695_213823884327154_3270251366266778284_n-removebg-preview.png" type="image/x-icon">
    <title>H&T Store</title>
</head>
<body>
    <?php include "nav_menu.php"?>
    <header class="cover">
        <img src="./assets/img/htstore.jpg" alt="">
    </header>
    <div class="about_us">
        <div class="box_title">Giới thiệu</div>
        <div class="about_us_container">
            <div class="about_us_inf">
                <?php
                include "connectDB.php";
                $sql = 'select short_about from store';
                $result = mysqli_query($conn, $sql);
                while ($about = mysqli_fetch_assoc($result)) {
                echo
                '<p>'.$about["short_about"].'</p>';
                }
                ?>
                <div class="div_btn">
                    <a href="about_us.php"><button>Chi tiết</button></a>
                </div>
            </div>
            <div class="store_img">
                <?php
                $sql = 'select img_store from store';
                $result = mysqli_query($conn, $sql);
                while ($about = mysqli_fetch_assoc($result)) {
                echo
                '<img src="'.$about['img_store'].'" alt="">';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="some_products">
        <div class="box_title">Sản phẩm bán chạy</div>
        <a href="products.php">Xem thêm <i class="ti-angle-double-right"></i></a>
        <div class="products_container">
        <?php
            $sql = 'select * from products limit 5';
            $result = mysqli_query($conn, $sql);
            while ($product = mysqli_fetch_assoc($result)) {
            echo
            '
            <div class="product_item">
                <div class="box_img">
                    <a href="product_item_page.php?id='.$product["product_id"].'"><img src="'.$product['product_img_main'].'" alt=""></a>
                </div>
                <span>'.$product['product_name'].'</span>
                <div class="prd_price">
                    <span class="color_text">'.number_format($product['price'],0,',','.').'</span>
                    <span class="change">₫</span>
                </div>
                <div class="product_rate_quantity">
                    <div class="product_rate">
                        <i class="fa-solid fa-star style"></i>
                        <i class="fa-solid fa-star style"></i>
                        <i class="fa-solid fa-star style"></i>
                        <i class="fa-solid fa-star style"></i>
                        <i class="fa-solid fa-star style"></i>
                    </div>
                </div>
                <div class="place_production">
                    <span>Hà Nội</span>
                </div>
            </div>
        ';
        }?>
        </div>
    </div>
    <?php include "footer_page.php"?>
</body>
</html>