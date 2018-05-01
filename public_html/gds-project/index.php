<?php
	include_once 'header.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">GROCERCERY DELIVERY SYSTEM</h1>
                        <p class="lead font-weight-normal">
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
                </div>
            </div>
        </div>
</div>

<?php
	include_once 'footer.php';
?>
