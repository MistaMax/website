<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
	<div class="main-wrapper">
                        <h2>Edit_Act</h2>
						<?php
if (isset($_POST['submit'])){
	$act = $_POST['action'];
	$P_ID = $_POST['P_ID'];

	
	
	if( $act == 'price'){
		$query = "SELECT * FROM `Product` WHERE szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '<h4><h2></br> Product: ' . $row['szProductName'] . " Old Price " . $row['dbPrice'] . '</h4></h2>';
		
		echo '<h4><h2></br> Enter new Price:</h4></h2>';
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
		echo '</br> Old Name: ' . $row['szProductName'];
		
		echo '</br> Enter new Name:';
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
		echo '</br> Product: ' . $row['szProductName'] . " Old Quantity " . $row['iQuantity'];
		
		echo '</br> Enter new Quantity:';
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
		echo '</br> Product: ' . $row['szProductName'] . " Old Location " . $row['szLocation'];
		
		echo '</br> Enter new Location:';
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
</section