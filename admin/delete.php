<?php
    include('connect.php');
    if (isset($_POST['delete'])) {
        $id = $_GET['id'];
        $update = "DELETE FROM `products` 
            WHERE `id` = '$id'";
        $query = mysqli_query($db, $update);
        if ($query) {
            header("location: ../products.php");
        } else {
            echo "error";
        }
    } 
?>
