<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List of Brand</title>
</head>
<body>
    <?php include "navbar_admin.php";?>
    <div class="brands">
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product ID</th>
            <th scope="col">Product Image Main</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Color</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Brand ID</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connectDB.php';
                $sql = 'select * from products';
                $result = mysqli_query($conn, $sql);
                $count = 1;
                while ($product = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <th scope='row'>.$count.</th>
                    <td>".$product['product_id']."</td>
                    <td>".$product['product_img_main']."</td>
                    <td>".$product['product_name']."</td>
                    <td>".$product['description']."</td>
                    <td>".$product['color']."</td>
                    <td>".$product['price']."</td>
                    <td>".$product['quantity']."</td>
                    <td>".$product['brand_id']."</td>
                    <td><a href='edit_product.php?id=".$product['product_id']."><button type='button' class='btn btn-success'>Edit</button></a></td>
                    <td><a href='delete_product.php?id=".$product['product_id']."><button type='button' class='btn btn-danger'>Delete</button></a></td>
                </tr>";
                $count++;
                }
            ?>
        </tbody>
    </table>
    <a href="add_new_product.php"><button type="button" class="btn btn-primary">Add new product</button></a>
    </div>
</body>
</html>