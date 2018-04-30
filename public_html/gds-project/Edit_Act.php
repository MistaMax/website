<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>

<h2>Edit_Act</h2>

<?php
if (isset($_POST['submit'])){
	$act = $_POST['action'];
	$P_ID = $_POST['P_ID'];

	
	
	if( $act == 'price'){
		$query = "SELECT * FROM `product` WHERE szProductID = '$P_ID'";
		$response = mysqli_query($connection, $query);
	
		//error trap should ONLY return 1 row
		$row = mysqli_fetch_array($response);
		echo '</br> Product: ' . $row['szProductName'] . " Old Price " . $row['dbPrice'];
		
		echo '</br> Enter new Price:';
		echo '<form action="Changed.php" method="POST">
				<input type="hidden" name="P_ID" value=' . $P_ID .'>
				<input type="hidden" name="From" value="P">
				<input type="text" name="New_Price" placeholder="Price">
				<button type="submit" name="submit">Submit</button>
				</form>';
		
	}
	if( $act == 'P_name'){
		echo 'P_name';
	}
	if( $act == 'Quantity'){
		echo 'Quantity';
	}
}

?>