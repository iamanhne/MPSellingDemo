<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admincss/add_new_brand.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H&T Store</title>
</head>
<body>
<?php
    include "connectDB.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM brands WHERE brand_id = '$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $brand = mysqli_fetch_assoc($result);
        if ($brand) {
        } else {
            echo "No record found for brand with ID: $id";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
    <div class="add_brand">
        <form action="edit_brand_logic.php" method='GET'>
            <div class="form-group">
                <Label for='brand_id'>Brand ID: </Label>
                <input type="text" name='brand_id' value="<?php echo $brand['brand_id']?>">
            </div>
            <div class="form-group">
                <Label for='brand_name'>Brand Name: </Label>
                <input type="text" name='brand_name' value="<?php echo $brand['brand']?>">
            </div>
            <div class="form-group">
                <Label for='description'>Description: </Label>
                <input type="text" name='description' value="<?php echo $brand['description']?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>