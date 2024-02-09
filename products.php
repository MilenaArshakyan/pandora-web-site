<?php
include('admin/connect.php');
$select = "SELECT * FROM `products`";
$query = mysqli_query($db, $select);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
	<?php include('header.php'); ?>

	<main>
		<section class="products-section">
			<img class="product-fimg" src="images/product-pic.jpeg">
			<?php
				if (mysqli_num_rows($query) > 0) {
					while ($products = mysqli_fetch_assoc($query)) { ?>
						<div class="product-card">
	           			 	<div class="product-img">
	                			<img src="<?php echo $products['image']; ?>">
	            			</div>
							<div class="product-title">
								<h1> <?php echo $products['title']; ?> </h1>
							</div>
							<div class="product-price">
								<p> $<?php echo $products['price']; ?> .00 </p>
							</div>
							<div class="product-star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half" aria-hidden="true"></i>
							</div>
							<div class="product-btn">
								<a href="single.php?id=<?php echo $products['id'] ?>">See More</a>
							</div>
	       				</div>
					<?php }
				}
			?>
		</section>
	</main>

	<?php include('footer.php'); ?>
	
</body>
</html>