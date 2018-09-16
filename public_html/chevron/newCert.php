<?php
date_default_timezone_set("America/New_York");
if(isset($_POST['submit'])){
    include_once 'includes/dbh.php';
	
	$C_ID = $_POST['certID'];
	$C_name = $_POST['certName'];
	
	//Check if all fields are entered
	if(empty($C_ID) || empty($C_name)){
		header("Location: addCert.php?Add=empty1");
		exit();
	}else {
		//check
		if(!preg_match("/^[a-zA-Z0-9]*$/", $C_ID) || !preg_match("/^[a-zA-Z0-9 ]*$/", $C_name)) {
			header("Location: addCert.php?Add=empty2");
			exit();
		}else {
			$sql = "SELECT * FROM certifications WHERE certID='$C_ID'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				header("Location: addCert.php?Add=empty3");
				exit();
			}else {
				//enter in DB
				$sql = "INSERT INTO certifications (certID, certName) VALUES ('$C_ID','$C_name');";
				mysqli_query($connection, $sql);
				header("Location: index.php?Add=success");
				exit();
			}
		}
	}
}
else
{
    header("Location: ../index.php");
	exit();
}?>