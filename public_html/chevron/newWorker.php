<?php
date_default_timezone_set("America/New_York");
if(isset($_POST['submit'])){
    include_once 'includes/dbh.php';
	
	$W_ID = $_POST['workerID'];
	$W_firstName = $_POST['firstName'];
    $W_middleName = $_POST['middleName'];
    $W_lastName = $_POST['lastName'];
    $W_sex = $_POST['sex'];
	//Check if all fields are entered
	if(empty($W_ID) || empty($W_firstName) || empty($W_middleName) || empty($W_lastName) || empty($W_sex)){
		header("Location: addWorker.php?Add=empty1");
		exit();
	}else {
		//check
		if(!preg_match("/^[a-zA-Z0-9]*$/", $W_ID) || !preg_match("/^[a-zA-Z0-9 ]*$/", $W_firstName)) {
			header("Location: addWorker.php?Add=empty2");
			exit();
		}else {
			$sql = "SELECT * FROM workers WHERE workerID='$W_ID'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				header("Location: addWorker.php?Add=empty3");
				exit();
			}else {
				//enter in DB
				$sql = "INSERT INTO workers (workerID, first_name, middle_name, last_name, sex) VALUES ('$W_ID','$W_firstName','$W_middleName','$W_lastName','$W_sex');";
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