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
            <th scope="col">ID</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connectDB.php';
                $sql = 'select * from brands';
                $result = mysqli_query($conn, $sql);
                while ($brand = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>".$brand['brand_id']."</td>
                    <td>".$brand['brand']."</td>
                    <td>".$brand['description']."</td>
                    <td><a href='edit_brand.php?id=".$brand['brand_id']."'>Edit</a></td>
                    <td><a href='delete_brand.php?id=".$brand['brand_id']."'>Delete</a></td>
                </tr>";
                }
            ?>
        </tbody>
    </table>
        <a href="add_new_brand.php"><button type="button" class="btn btn-primary">Add new Brand</button></a>
    </div>
</body>
</html>