<?php
	include_once 'header.php';
	include 'includes/dbh.php';
?>

<h2>Price Changed</h2>

<?php
if (isset($_POST['submit'])){
	$P_ID = $_POST['P_ID'];
	$From  $_POST['From'];
	$new_Price $_POST['New_Price'];
	
	
	
	
	switch($From){
		case "P":
			$query = "SELECT * FROM `product` WHERE szProductID = '$P_ID'";
	}
}

?>