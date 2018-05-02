<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-semilight">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 font-weight-normal">Changed</h1>
                        <p class="lead font-weight-normal">
						<?php
if (isset($_POST['submit'])){
	$P_ID = $_POST['P_ID'];
	$From  = $_POST['From'];
	
	
	
	
	switch($From){
		case "P":
			$New_Val = $_POST['New_Val'];
			$query =  "UPDATE Product SET dbPrice = $New_Val WHERE szProductID ='$P_ID'";
			$response = mysqli_query($connection, $query);
			header("Location: view_product.php?Changed=sucess");
			break;
			
		case "N":
			$New_Val = $_POST['New_Val'];
			$query =  "UPDATE Product SET szProductName = '$New_Val' WHERE szProductID ='$P_ID'";
			$response = mysqli_query($connection, $query);
			header("Location: view_product.php?Changed=sucess");
			break;
			
		case "L":
			$New_Val = $_POST['New_Val'];
			$query =  "UPDATE Product SET szLocation = '$New_Val' WHERE szProductID ='$P_ID'";
			$response = mysqli_query($connection, $query);
			header("Location: view_product.php?Changed=sucess");
			break;
			
		case "Q":
			$New_Val = $_POST['New_Val'];
			if($New_Val < 0){
				$query = "DELETE FROM Inventory WHERE szProductId = '$P_ID'";
				$response = mysqli_query($connection, $query);
				$query = "DELETE FROM product WHERE szProductId = '$P_ID'";
				$response = mysqli_query($connection, $query);
				header("Location: view_product.php?Removed=sucess");
			}else{
				$query =  "UPDATE Inventory SET iQuantity = $New_Val WHERE szProductID ='$P_ID'";
				$response = mysqli_query($connection, $query);
				header("Location: view_product.php?Changed=sucess");
			}
			break;
	}
}

?>
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>