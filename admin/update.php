<?php
    include('connect.php');
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $info = $_POST['info'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $image1 = $_POST['image1'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];
        $id = $_GET['id'];

        $update = "UPDATE `products` SET
            `title` = '$title',
            `info` = '$info',
            `price` = '$price',
            `image` = '$image' WHERE `id` = '$id'";
        $query = mysqli_query($db, $update);
        if ($query) {
            header("location: ../products.php");
        } else {
            echo "error";
        }
    }
?>

<form action="" method="post">
    <input type="hidden" name="id">
    <input type="text" name="title" placeholder="Update Title" required="">
    <input type="text" name="info" placeholder="Update Info" required="">
    <input type="number" name="price" placeholder="Update Price" required="">
    <input type="text" name="image" placeholder="Update Image" required="">
    <input type="text" name="image1" placeholder="Update Image" required="">
    <input type="text" name="image2" placeholder="Update Image" required="">
    <input type="text" name="image3" placeholder="Update Image" required="">
    <input type="submit" name="update" value="Update product" required="">
</form>