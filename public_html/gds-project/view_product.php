<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>

<h2>View_Product</h2>

<?php 
$query = "SELECT * FROM `inventory`";


$response = mysqli_query($connection, $query);

if($response){
	echo '<table cellspacing="5" cellpadding="5">
	
	<tr><td align="left"><b>Product ID Name</b></td>
	<td align="left"><b>Quantity</b></td>
	<td align="left"><b>Recieved</b></td>
	<td align="left"><b>Expire</b></td>
		
	</tr>';
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">'.
		$row['szProductID'] . '</td><td align="left">'.
		$row['iQuantity'] . '</td><td align="left">' .
		$row['szRecievedDt'] . '</td><td align="left">' .
		$row['szExpirationDt'] . '</td><td align="left">' ;
		echo '</tr>';
	}
	echo '</table>';
}

?>
