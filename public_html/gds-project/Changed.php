<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>
<section class="main-container">
	<div class="main-wrapper">
                        <h2>Changed</h2>
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
</div>
</section>