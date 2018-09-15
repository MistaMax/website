<?php

if(isset($_POST['submit'])){
	
	include_once 'dbh.php';
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//Check if uid or pwd is empty
	if(empty($uid) || empty($pwd)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}else {
		//check
		if(!preg_match("/^[a-zA-Z0-9]*$/", $uid) || !preg_match("/^[a-zA-Z0-9]*$/", $pwd)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		}else {
			$sql = "SELECT * FROM Login WHERE szUsername='$uid'";
			$result = mysqli_query($connection, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				header("Location: ../signup.php?signup=usertaken");
				exit();
			}else {
				//password hash
				$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
				//enter in DB
				$sql = "INSERT INTO Login (szUsername, szPassword) VALUES ('$uid', '$hashPwd');";
				mysqli_query($connection, $sql);
				header("Location: ../signup.php?signup=success");
				exit();
			}
		}
	}
	
}else {
	header("Location: ../signup.php");
	exit();
}