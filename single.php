<?php
include('admin/connect.php');
$id = $_GET['id'];
$select = "SELECT * FROM `products` WHERE `id`='$id'";
$query = mysqli_query($db, $select);
$products = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Single page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<?php include('header.php'); ?>

	<main>
		<div class="single-cont">
			<div class="single-img">
				<img class="sing-imgags" src="<?php echo $products['image']; ?>">
				<img class="sing-imgags" src="<?php echo $products['image1']; ?>">
				<img class="sing-imgags" src="<?php echo $products['image2']; ?>">
				<img class="sing-imgags" src="<?php echo $products['image3']; ?>">
			</div>
			<div class="single-name">
				<div class="single-txt">
	                <h1><?php echo $products['title'];?> </h1>
	            </div>
	            <div class="single-price">
	                <p>$<?php echo $products['price'];?>.00</p>
	            </div>
				<div class="single-prod-det">PRODUCT DETAILS</div>
				<p class="single-prod-det-txt"><?php echo $products['info'];?></p>
				<div class="updel">
					<a href="admin/update.php?id=<?php echo $products['id']; ?>" class="update">update</a>
					<form class = "delete" action="admin/delete.php?id=<?php echo $products['id'];?>" method='post'>
						<input class="del" type="submit" name="delete" value="Delete">
					</form>
				</div>
			</div>
		</div>
	</main>
	
	<?php include('footer.php'); ?>

</body>
</html>