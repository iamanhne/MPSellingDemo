<?php
    include 'connectDB.php';
    $sts_id = $_GET['id'];
    $sql = "DELETE FROM message_contact
    WHERE message_id = $msg_id";
    $result = mysqli_query($conn, $sql);
    header('location:contact.php');
?>