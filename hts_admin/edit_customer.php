<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admincss/add_new_user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H&T Store</title>
</head>
<body>
<?php
    include "connectDB.php";
    $id = $_GET['id'];

    // Fix the SQL query string
    $sql = "SELECT * FROM customers WHERE customer_id = '$id' LIMIT 1";
    
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        $customer = mysqli_fetch_assoc($result);

        // Check if a row was found
        if ($customer) {
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
    <div class="add_user">
        <form action="edit_customer_logic.php" method="POST">
            <div class="form-group">
                <label for="cus_id">ID</label>
                <input type="text" id="exampleInputEmail1" name="cus_id" value="<?php echo $customer['customer_id']?>" readonly required>
            </div>
            <div class="form-group">
                <label for="fullname">FullName</label>
                <input type="text" id="exampleInputEmail1" name="fullname" placeholder="Enter fullname" value="<?php echo $customer['fullname']?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo $customer['email']?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="exampleInputEmail1" name="phone" placeholder="Enter phone" value="<?php echo $customer['phone']?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="exampleInputEmail1" name="address" placeholder="Enter address" value="<?php echo $customer['address']?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>