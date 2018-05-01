<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>

<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">View_Product</h1>
                        <p class="lead font-weight-normal">
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
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
	include_once 'footer.php';
?>
