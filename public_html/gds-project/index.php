<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>GROCERCERY DELIVERY SYSTEM</h2>
		<p>
		<?php
			if(isset($_SESSION['u_id'])){
				echo "WELCOME TO  GROCERCERY DELIVERY MANAGEMENT SYSTEM";
				?>
				<div class="dropdown">
				<button class="dropbtn">Dropdown</button>
				<div class="dropdown-content">
				<a href="view_product.php">View Product</a>
				<a href="Edit_Product.php">Edit Product</a>
				</div>
				</div>
				<?php
			}
		?>
		</p>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
