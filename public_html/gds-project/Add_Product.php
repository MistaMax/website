<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>New Product</h2>
		<form class="signup-form" action="New_Product.php" method="POST">
			<input type="text" name="Product_Id" placeholder="Product ID">
			<input type="text" name="Product_Name" placeholder="Product Name">
			<input type="text" name="Price" placeholder="Price">
			<input type="text" name="Location" placeholder="Location">
			<input type="text" name="Quantity" placeholder="Quantity">
			<input type="text" name="Expire_Date" placeholder="Expiration Date (YYYY-MM-DD)">
			<button type="submit" name="submit">Add Product</button>
		</form>
	</div>
</section>