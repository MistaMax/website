<?php
	include_once 'header.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">New Product</h1>
                        <p class="lead font-weight-normal">
						<form class="signup-form" action="New_Product.php" method="POST">
			<input type="text" name="Product_Id" placeholder="Product ID">
			<input type="text" name="Product_Name" placeholder="Product Name">
			<input type="text" name="Price" placeholder="Price">
			<input type="text" name="Location" placeholder="Location">
			<input type="text" name="Quantity" placeholder="Quantity">
			<input type="text" name="Expire_Date" placeholder="Expiration Date (YYYY-MM-DD)">
			<button type="submit" name="submit">Add Product</button>
		</form>
						</p>
                    </div>
                </div>
            </div>
        </div>
	</div>
		