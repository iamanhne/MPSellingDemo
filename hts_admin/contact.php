<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
    <?php include "navbar_admin.php";?>
    <div>
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connectDB.php';
                $sql = 'select * from statuses';
                $result = mysqli_query($conn, $sql);
                while ($status = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>".$status['status_id']."</td>
                    <td>".$status['name']."</td>
                    <td>".$status['email']."</td>
                    <td>".$status['message']."</td>
                    <td><a href='edit_mail_contact.php?id=".$status['status_id']."'>Edit</a></td>
                    <td><a href='delete_mail_contact.php?id=".$status['status_id']."'>Delete</a></td>
                </tr>";
                }
            ?>
        </tbody>
    </table>
        <a href="add_new_brand.php"><button type="button" class="btn btn-primary">Add new Brand</button></a>
    </div>
</body>
</html>