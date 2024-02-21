<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/product_item_page.css">
    <title>H&T Store</title>
</head>
<body>
    <?php include "nav_menu.php"?>
    <div class="item_img_container">
        <div class="containers">
            <div class="item">
                <div class="img_main">
                    <?php
                        include "connectDB.php";
                        $id = $_GET['id'];
                        $sql = "select product_img_main from products where product_id=$id";  
                        $result = mysqli_query($conn,$sql);
                        while($product = mysqli_fetch_assoc($result)) {
                            echo '<img src="'.$product['product_img_main'].'" alt="">';
                        }
                    ?>
                </div>
                <div class="img_submain">
                    <?php
                        include "connectDB.php";
                        $id = $_GET['id'];
                        $sql = "SELECT images.* FROM products INNER JOIN images ON products.product_id = images.product_id
                        WHERE products.product_id =$id";
                        $result = mysqli_query($conn, $sql);
                        while($img_thumb = mysqli_fetch_assoc($result)) {
                            echo '<img src="'.$img_thumb['url'].'" alt="" onclick="changeImg(this)" onmouseover="changeImg(this)">';
                        }
                    ?>
                </div>
                <div class="social_share">

                </div>';
            </div>
            <div class="info_item">
                <div class="info_item_title">
                    <div class="loves">Yêu thích</div>
                    <?php
                        include "connectDB.php";
                        $id = $_GET['id'];
                        $sql = "select * from products where product_id=$id";
                        $result = mysqli_query($conn, $sql);
                        while ($product = mysqli_fetch_assoc($result)) {
                            $colors = explode(',', $product['color']);
                            echo '
                            <span> Điện thoại '.$product["product_name"].'</span>
                            <div class="item_rate">
                                <div class="rate">5.0</div>
                                <div class="star_rate">
                                    <i class="fa-solid fa-star style"></i>
                                    <i class="fa-solid fa-star style"></i>
                                    <i class="fa-solid fa-star style"></i>
                                    <i class="fa-solid fa-star style"></i>
                                    <i class="fa-solid fa-star style"></i>
                                </div>
                                <div class="rate_count">
                                    <div class="rate_number">93</div>
                                    <span class="dg">Đánh giá</span>
                                </div>
                                <span>201k Đã bán</span>
                            </div>
                            <div>
                                <div class="prd_price">
                                    <span class="color_text">'.number_format($product['price'],0,',','.').'</span>
                                    <span class="change">₫</span>
                                </div>
                            </div>';
                            echo '<div class="item_color">';
                            foreach ($colors as $color) {
                                echo '<div class="choose_color">'.trim($color).'</div>';
                            }
                            echo '</div>';
                            echo '<div>';
                            echo '<div class="pay_btn">';
                            echo '<a href="pay_item_page.php?id='.$product["product_id"].'"><button>Mua ngay</button></a>';
                            echo '</div>';
                            echo '<div class="inf_item_pay">';
                            echo '<span>Thông tin sản phẩm</span>
                            <p>'.$product["description"].'</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include "footer_page.php"?>
    <script src="./assets/js/product_item/change_img.js"></script>
</body>
</html>