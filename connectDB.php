<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'anh1234567890';
    $dbname = 'htstore';
    $conn = mysqli_connect($server,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>