<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
<div class="main-wrapper">
						<h2>View Inventory</h2>
						</div>
</section>
						<?php 
//$query = "SELECT * FROM `inventory`";

$query = " SELECT p.szProductID, p.szProductName, p.szLocation, i.iQuantity, p.dbPrice, i.szRecievedDt, i.szExpirationDt FROM Product p , Inventory i WHERE i.szProductID = p.szProductID";

$response = mysqli_query($connection, $query);

if($response){
	echo '<table class="center" cellspacing="5" cellpadding="5" ><h4></h4>
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<tr><td align="left"><b>Product ID</b></td>
	<td align="left"><b>Product Name</b></td>
	<td align="left"><b>Quantity</b></td>
	<td align="left"><b>Price</b></td>
	<td align="left"><b>Location</b></td>
	<td align="left"><b>Recieved</b></td>
	<td align="left"><b>Expire</b></td>
		
	</tr>';
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">'.
		$row['szProductID'] . '</td><td align="left">'.
		$row['szProductName'] . '</td><td align="left">'.
		$row['iQuantity'] . '</td><td align="left">' .
		$row['dbPrice'] . '</td><td align="left">' .
		$row['szLocation'] . '</td><td align="left">' .
		$row['szRecievedDt'] . '</td><td align="left">' .
		$row['szExpirationDt'] . '</td><td align="left">' ;
		echo '</tr>';
	}
	echo '</table>';
}
?>
<?php
	include_once 'footer.php';
?>
