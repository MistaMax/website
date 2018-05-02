<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
	<div class="main-wrapper">
						<h2>Edit_Act</h2>
						</div>
</section>
<div class="container-fluid">
        <div class="row">
            <div class="col">
						<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    	<div class="col-md-5 p-lg-5 mx-auto my-5">
						<?php
if (isset($_POST['submit'])){
	$act = $_POST['action'];
	$P_ID = $_POST['P_ID'];

	
	
	if( $act == 'price'){
		$query = "SELECT * FROM `Product` WHERE szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '<h1 class="display-4 font-weight-normal"> Product: ' . $row['szProductName'] . "</br>Old Price: " . $row['dbPrice'] . '</h1>';
		
		echo '<h1 class="display-4 font-weight-normal"> Enter new Price:</h1>';
		echo '<form action="Changed.php" method="POST">
				<input type="hidden" name="P_ID" value=' . $P_ID .'>
				<input type="hidden" name="From" value="P">
				<input type="text" name="New_Val" placeholder="Price">
				<button type="submit" name="submit">Submit</button>
				</form>';
		
	}
	if( $act == 'P_name'){
		$query = "SELECT * FROM `Product` WHERE szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '<h1 class="display-4 font-weight-normal"> Old Name: ' . $row['szProductName'] . '</h1>';
		
		echo '<h1 class="display-4 font-weight-normal"> Enter new Name:</h1>';
		echo '<form action="Changed.php" method="POST">
				<input type="hidden" name="P_ID" value=' . $P_ID .'>
				<input type="hidden" name="From" value="N">
				<input type="text" name="New_Val" placeholder="Name">
				<button type="submit" name="submit">Submit</button>
				</form>';
	}
	
	if( $act == 'Quantity'){
		$query = "SELECT p.szProductID, p.szProductName, i.iQuantity FROM Product p , Inventory i WHERE i.szProductID = p.szProductID AND p.szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '<h1 class="display-4 font-weight-normal">Product: ' . $row['szProductName'] . "</br>Old Quantity: " . $row['iQuantity'] . '</h1>';
		
		echo '<h1 class="display-4 font-weight-normal"> Enter new Quantity:</h1>';
		echo '<form action="Changed.php" method="POST">
				<input type="hidden" name="P_ID" value=' . $P_ID .'>
				<input type="hidden" name="From" value="Q">
				<input type="text" name="New_Val" placeholder="Quantity">
				<button type="submit" name="submit">Submit</button>
				</form>';
	}
	
	if( $act == 'Location'){
		$query = "SELECT * FROM `Product` WHERE szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '<h1 class="display-4 font-weight-normal"> Product: ' . $row['szProductName'] . "</br>Old Location: " . $row['szLocation'] . '</h1>';
		
		echo '<h1 class="display-4 font-weight-normal"> Enter new Location:</h1>';
		echo '<form action="Changed.php" method="POST">
				<input type="hidden" name="P_ID" value=' . $P_ID .'>
				<input type="hidden" name="From" value="L">
				<input type="text" name="New_Val" placeholder="Location">
				<button type="submit" name="submit">Submit</button>
				</form>';
	}
}

?>
</div>
</div>
</div>
</div>
</div>

<?php
	include_once 'footer.php';
?>
