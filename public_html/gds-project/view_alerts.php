<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
<div class="main-wrapper">
						<h2>View Alerts</h2>
						</div>
</section>
						<?php 
//$query = "SELECT * FROM `inventory`";
$query = "SELECT 
    i.szProductID, p.szProductName, i.szExpirationDt
FROM
    Inventory i,
    Product p
WHERE
    i.szProductID = p.szProductID
        AND i.szExpirationDt <= DATE(DATE_ADD(NOW(), INTERVAL + 7 DAY));";

$response = mysqli_query($connection, $query);


echo "<h2>EXIPIRATION ALERT</h2>";
if($response){
	echo '<table class="center" cellspacing="5" cellpadding="5" >
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<tr><td align="left"><b>Product ID</b></td>
	<td align="left"><b>Product Name</b></td>
	<td align="left"><b>Expiration Date</b></td>
		
	</tr>';
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">'.
		$row['szProductID'] . '</td><td align="left">'.
		$row['szProductName'] . '</td><td align="left">'.
		$row['szExpirationDt'] . '</td><td align="left">';
		echo '</tr>';
	}
	echo '</table>';
}



$query = "SELECT 
    t1.szProductID,
    t1.szProductName,
    t1.iTotal AS iTotalProducts
FROM
    (SELECT 
        i.szProductID, SUM(i.iQuantity) AS iTotal, p.szProductName
    FROM
        Inventory i, Product p
    WHERE
        p.szProductID = i.szProductID
    GROUP BY i.szProductID) t1
WHERE
    t1.iTotal < 15";

$response = mysqli_query($connection, $query);


echo "<h2>RUNNING LOW (Less than 15 Items)</h2>";
if($response){
	echo '<table class="center" cellspacing="5" cellpadding="5" >
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<tr><td align="left"><b>Product ID</b></td>
	<td align="left"><b>Product Name</b></td>
	<td align="left"><b>Quantity</b></td>
		
	</tr>';
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">'.
		$row['szProductID'] . '</td><td align="left">'.
		$row['szProductName'] . '</td><td align="left">'.
		$row['iTotalProducts'] . '</td><td align="left">';
		echo '</tr>';
	}
	echo '</table>';
}



?>
</br>
</br>
</br>
</br>
<?php
	include_once 'footer.php';
?>
