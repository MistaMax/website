<?php
date_default_timezone_set("America/New_York");
if(isset($_POST['submit'])){
	
	include_once 'includes/dbh.php';
	
	$P_ID = $_POST['Product_Id'];
	$P_name = $_POST['Product_Name'];
	$P_price = $_POST['Price'];
	$P_Loc = $_POST['Location'];
	$P_Quant = $_POST['Quantity'];
	$P_exp = $_POST['Expire_Date'];
	$P_aqqr = date("Y-m-d");
	
	//Check if all fields are entered
	if(empty($P_ID) || empty($P_name) || empty($P_price) || empty($P_Quant) || empty($P_exp) || empty($P_Loc) ){
		header("Location: Add_Product.php?Add=empty1");
		exit();
	}else {
		//check
		if(!preg_match("/^[a-zA-Z0-9]*$/", $P_ID) || !preg_match("/^[a-zA-Z0-9 ]*$/", $P_name)) {
			header("Location: Add_Product.php?Add=empty2");
			exit();
		}else {
			$sql = "SELECT * FROM inventory WHERE szProductID='$P_ID'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				header("Location: Add_Product.php?Add=empty3");
				exit();
			}else {
				//enter in DB
				$sql = "INSERT INTO inventory (szProductID, iQuantity, szRecievedDt, szExpirationDt) VALUES ('$P_ID', '$P_Quant','$P_aqqr','$P_exp');";
				mysqli_query($connection, $sql);
				$sql = "INSERT INTO product (szProductID, szProductName, szLocation, dbPrice) VALUES ('$P_ID', '$P_name','$P_Loc','$P_price');";
				mysqli_query($connection, $sql);
				header("Location: view_product.php?Add=success");
				exit();
			}
		}
	}
	
}else {
	header("Location: ../signup.php");
	exit();
}
?>