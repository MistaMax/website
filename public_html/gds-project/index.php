<?php
	include_once 'header.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
						<p class="lead font-weight-normal">
						<?php
			if(isset($_SESSION['u_id'])){
				echo '<h1 class="display-4 font-weight-normal">WELCOME TO  GROCERCERY DELIVERY MANAGEMENT SYSTEM</h1>';
				?>
						</p>
					</div>
				</div>
				</div>
				<div class="col">
				<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5 b50">
						<p class="lead font-weight-normal">
				<div class="dropdown">
				<button class="dropbtn">Take Action!</button>
				<div class="dropdown-content">
				<a href="view_product.php">View Product</a>
				<a href="Edit_Product.php">Edit Product</a>
				<a href="Add_Product.php">Add A New Product</a>
				<a href="view_orders.php">View Orders</a>
				<a href="view_alerts.php">View Alerts</a>
				</div>
				</div>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
				<?php
			}
			else{
				?>
				<h1 class="display-4 font-weight-normal">Grocery Delivery System</h1>
				<p class="lead font-weight-normal">We supply people with groceries on demand</p>
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
