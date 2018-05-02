<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">View_Orders</h1>
                        <p class="lead font-weight-normal">
						<?php 
//$query = "SELECT * FROM `inventory`";
$query = "SELECT t1.szOrderID, t1.szOrderDT, SUM(dbTotalPrice) AS dbTotalCost, SUM(iTotalQty) AS iTotalItems 
FROM (SELECT oo.szProductID, oo.szOrderID, oo.szOrderDT, SUM(oo.iQuantity) * pp.dbPrice AS dbTotalPrice, SUM(oo.iQuantity) AS iTotalQty 
FROM Orders oo, Product pp WHERE oo.szProductID = pp.szProductID GROUP BY oo.szOrderID , oo.szProductID , oo.szOrderDT) t1 GROUP BY t1.szOrderID , t1.szOrderDT;";

$response = mysqli_query($connection, $query);

if($response){
	echo '<table cellspacing="5" cellpadding="5" ><h4></h4>
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<col width = "200">
	<tr><td align="left"><b>Order ID</b></td>
	<td align="left"><b>Order Dt</b></td>
	<td align="left"><b>Total Cost</b></td>
	<td align="left"><b>Total Items</b></td>
		
	</tr>';
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">'.
		$row['szOrderID'] . '</td><td align="left">'.
		$row['szOrderDT'] . '</td><td align="left">'.
		$row['dbTotalCost'] . '</td><td align="left">' .
		$row['iTotalItems'] . '</td><td align="left">' ;
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