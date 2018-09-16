<?php
date_default_timezone_set("America/New_York");
if(isset($_POST['submit'])){
    include_once 'includes/dbh.php';
	
	$W_ID = $_POST['workOrder'];
    $W_certReqID = $_POST['certReqID'];
    $W_facility = $_POST['facility'];
    $W_equipmentID = $_POST['equipmentID'];
    $W_priority = $_POST['priority'];
    $W_timeToComplete = $_POST['timeToComplete'];
	//Check if all fields are entered
	if(empty($W_ID) || empty($W_certReqID) || empty($W_facility) || empty($W_equipmentID) || empty($W_priority) || empty($W_timeToComplete)){
		header("Location: addWorkOrder.php?Add=empty1");
		exit();
	}else {
		//check
		if(!preg_match("/^[a-zA-Z0-9]*$/", $W_ID) || !preg_match("/^[a-zA-Z0-9 ]*$/", $W_firstName)) {
			header("Location: addWorkOrder.php?Add=empty2");
			exit();
		}else {
			$sql = "SELECT * FROM workorder WHERE workOrder='$W_ID'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				header("Location: addWorkOrder.php?Add=empty3");
				exit();
			}else {
				//enter in DB
				$sql = "INSERT INTO `workorders` (workOrder,facility,equipmentID,priority,timeToComplete) values ('$W_ID','$W_facility','$W_equipmentID','$W_priority','$W_timeToComplete');";
                mysqli_query($connection, $sql);
                $sql="INSERT INTO order_cert_requirement (certID,workOrder) VALUES ('$W_certReqID','$W_ID')";
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