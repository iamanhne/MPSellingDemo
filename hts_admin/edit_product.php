<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admincss/add_new_pro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H&T Store</title>
</head>
<body>
<?php
    include "connectDB.php";
    $id = $_GET['id'];

    // Fix the SQL query string
    $sql = "SELECT * FROM products WHERE product_id = '$id' LIMIT 1";
    
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        $product = mysqli_fetch_assoc($result);

        // Check if a row was found
        if ($product) {
            // Process the data here
            // ...
        } else {
            echo "No record found for brand with ID: $id";
        }
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($conn);
    }

    // Don't forget to close the connection
    mysqli_close($conn);
?>
    <div class="form_container_add_new">
        <form action="edit_products_logic.php" method="POST">
            <div class="form-group">
                <label for="prd_id">ID</label>
                <input type="text" id="exampleInputEmail1" name="prd_id" value="<?php echo $product['product_id']?>" readonly required>
            </div>
            <div class="form-group">
                <label for="Product_Image_Main">Product Image Main</label>
                <input type="text" id="exampleInputEmail1" name="Product_Image_Main" placeholder="Enter link img main" value="<?php echo $product['product_img_main']?>" required>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="exampleInputEmail1" name="product_name" placeholder="Enter product name" value="<?php echo $product['product_name']?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="exampleInputEmail1" name="description" placeholder="Enter Description" style="height:200px" required><?php echo $product['description']?></textarea>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" id="exampleInputEmail1" name="color" placeholder="Enter Color" value="<?php echo $product['color']?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="exampleInputEmail1" name="price" placeholder="Enter Price" value="<?php echo $product['price']?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" id="exampleInputEmail1" name="quantity" placeholder="Enter Quantity" value="<?php echo $product['quantity']?>" required>
            </div>
            <div class="form-group">
                <label for="brandid">Brand_ID</label>
                <input type="text" id="exampleInputEmail1" name="brandid" placeholder="Enter Brand_ID" value="<?php echo $product['brand_id']?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>   
</body>
</html>