<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include"navbar_admin.php";?>
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connectDB.php';
                $sql = 'select * from customers';
                $result = mysqli_query($conn, $sql);
                $count = 1;
                while ($customer = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <th scope='row'>.$count.</th>
                    <td>".$customer['fullname']."</td>
                    <td>".$customer['email']."</td>
                    <td>".$customer['phone']."</td>
                    <td>".$customer['address']."</td>
                    <td><a href='edit_customer.php?id=".$customer['customer_id']."><button type='button' class='btn btn-success'>Edit</button></a></td>
                    <td><a href='delete_customer.php?id=".$customer['customer_id']."><button type='button' class='btn btn-danger'>Delete</button></a></td>
                </tr>";
                $count++;
                }
            ?>
        </tbody>
    </table>
    <a href="add_customer.php"><button type="button" class="btn btn-primary">Add new customer</button></a>
</body>
</html>