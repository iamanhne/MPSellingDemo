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

    // Fix the SQL query string
    $sql = "SELECT * FROM statuses WHERE status_id = '$id' LIMIT 1";
    
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        $status = mysqli_fetch_assoc($result);

        // Check if a row was found
        if ($status) {
            // Process the data here
            // ...
        } else {
            echo "No record found for status with ID: $id";
        }
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($conn);
    }

    // Don't forget to close the connection
    mysqli_close($conn);
?>
    <div class="add_brand">
        <form action="edit_message_logic.php" method='GET'>
            <div class="form-group">
                <Label for='status_id'>Status ID: </Label>
                <input type="text" name='status_id' value="<?php echo $status['status_id']?>">
            </div>
            <div class="form-group">
                <Label for='name'>Name: </Label>
                <input type="text" name='name' value="<?php echo $status['name']?>">
            </div>
            <div class="form-group">
                <Label for='email'>Email: </Label>
                <input type="email" name='email' value="<?php echo $status['email']?>">
            </div>
            <div class="form-group">
                <Label for='message'>Message: </Label>
                <input type="text" name='message' value="<?php echo $status['message']?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>