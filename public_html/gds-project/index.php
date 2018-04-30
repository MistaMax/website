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
			}
		?>
		</p>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
