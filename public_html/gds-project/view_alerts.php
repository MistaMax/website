<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">View_Alerts</h1>
                        <p class="lead font-weight-normal">
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


echo "<h2>EXIPIRES SOON</h2>";
if($response){
	echo '<table cellspacing="5" cellpadding="5" >
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
	echo '<table cellspacing="5" cellpadding="5" >
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
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>