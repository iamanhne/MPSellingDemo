<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/pay_item_page.css">
    <title>H&T Store</title>
</head>
<body>
    <?php include"nav_menu.php"?>
    <div class="pay_item_container">
        <div class="pay_container">
            <div class="item_pay">
                <div class="item_img">
                    <?php
                        include "connectDB.php";
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM products WHERE product_id=$id";
                        $result = mysqli_query($conn, $sql);
                        while ($product = mysqli_fetch_assoc($result)) {
                            echo '<img src="'.$product['product_img_main'].'" alt="">';
                        }
                    ?>
                </div>
                <div class="item_inf">
                    <span>Dien thoai aipne</span>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <?php include"footer_page.php"?>
</body>
</html>