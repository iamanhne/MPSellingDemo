<?php
    include 'connectDB.php';
    $sql ='SELECT * from brands';
    $result = mysqli_query($conn, $sql);
    while ($brands=mysqli_fetch_assoc($result)){
        echo ($brands['name'].'-'.$brands['description'].'<br>');
    }
    
?>