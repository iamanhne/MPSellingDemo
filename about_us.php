<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/about_us.css">
    <title>H&T Store</title>
</head>
<body>
    <?php include "nav_menu.php"?>
    <div class="about_container">
        <?php
            include "connectDB.php";
            $sql = 'select * from store';
            $result = mysqli_query($conn, $sql);
            while ($about = mysqli_fetch_assoc($result)) {
                $abt = explode('\n', $about['about']);
                foreach($abt as $about2) {
                    echo '<p>'.trim($about2).'</p>';
                }
            }
        ?>
    </div>
    <?php include "footer_page.php"?>
</body>
</html>