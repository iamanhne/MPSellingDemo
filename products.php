<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/products.css">
    <title>H&T Store</title>
</head>
<body>
    <?php include "nav_menu.php"?>
    <div class="products">
        <div class="products_cont">
        <?php
            include "connectDB.php";
            $sql = 'select * from products';
            if (isset($_GET['id'])) {
                $brand = $_GET['id'];
                $sql = "SELECT * FROM products WHERE brand_id = '".$brand."'";
            }
            $result = $conn->query($sql);
            $result = mysqli_query($conn, $sql);
            while ($product = mysqli_fetch_assoc($result)) {
            echo
            '
            <div class="products_item">
                <div class="box_image">
                    <img src="'.$product['product_img_main'].'" alt="">
                </div>
                <span><a href="product_item_page.php?id='.$product['product_id'].'">'.$product['product_name'].'</a></span>
                <div class="prds_price">
                    <span class="color-text">'.number_format($product['price'],0,',','.').'</span>
                    <span class="changes">₫</span>
                </div>
                <div class="products_rate_quantity">
                    <div class="products_rate">
                        <i class="fa-solid fa-star styles"></i>
                        <i class="fa-solid fa-star styles"></i>
                        <i class="fa-solid fa-star styles"></i>
                        <i class="fa-solid fa-star styles"></i>
                        <i class="fa-solid fa-star styles"></i>
                    </div>
                </div>
            </div>
        ';
        }?>
    <?php include "footer_page.php"?>
</html>