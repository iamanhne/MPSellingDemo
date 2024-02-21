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
    <div class="add_brand">
        <form action="add_new_brand_logic.php" method='GET'>
            <div class="form-group">
                <Label for='brand_name'>Brand Name: </Label>
                <input type="text" name='brand_name'>
            </div>
            <div class="form-group">
                <Label for='description'>Description: </Label>
                <input type="text" name='description'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>