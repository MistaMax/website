<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>

<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Edit_Act</h1>
                        <p class="lead font-weight-normal"><?php
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

						?></p>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
	include_once 'footer.php';
?>