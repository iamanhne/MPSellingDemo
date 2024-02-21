<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admincss/add_new_pro.css">
    <title>H&T Store</title>
</head>
<body>
    <div class="form_container_add_new">
        <form action="add_new_product_logic.php" method="POST" class="form_add">
            <div class="form-group">
                <label for="prd_id">ID</label>
                <input type="text" id="exampleInputEmail1" name="prd_id" required>
            </div>
            <div class="form-group">
                <label for="Product_Image_Main">Product Image Main</label>
                <input type="text" id="exampleInputEmail1" name="Product_Image_Main" placeholder="Enter link img main" required>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="exampleInputEmail1" name="product_name" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="exampleInputEmail1" name="description" placeholder="Enter Description" style="height:200px" required></textarea>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" id="exampleInputEmail1" name="color" placeholder="Enter Color" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="exampleInputEmail1" name="price" placeholder="Enter Price" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" id="exampleInputEmail1" name="quantity" placeholder="Enter Quantity" required>
            </div>
            <div class="form-group">
                <label for="brandid">Brand_ID</label>
                <input type="text" id="exampleInputEmail1" name="brandid" placeholder="Enter Brand_ID" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>