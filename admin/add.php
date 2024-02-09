<?php
    include('connect.php');
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $info = $_POST['info'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $image1 = $_POST['image1'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];

        $add = "INSERT INTO `products` (`title`, `info`, `price`, `image`, `image1`, `image2`, `image3`) VALUES ('$title', '$info', '$price', '$image', '$image1', '$image2', '$image3')";
        $query = mysqli_query($db, $add);
        if ($query) {
            echo "good";
        } else {
            echo "error";
        }
    }
?>

<form action="add.php" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="info" placeholder="Info">
    <input type="number" name="price" placeholder="Price">
    <input type="text" name="image" placeholder="Image1">
    <input type="text" name="image1" placeholder="Image2">
    <input type="text" name="image2" placeholder="Image3">
    <input type="text" name="image3" placeholder="Image4">
    <input type="submit" name="add" value="Add product">
</form>

<form action="../products.php">
    <input type="submit" name="goProducts" value="goProduct">
</form>