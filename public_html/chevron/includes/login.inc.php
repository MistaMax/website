<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.php';
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//Check if empty
	if (empty($uid) || empty($pwd)){
		header("Location: ../signin.php?login=error1");
		exit();
	}else {
		$sql = "SELECT * FROM Login WHERE szUsername='$uid'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
			header("Location: ../signin.php?login=error2");
			exit();
		}else {
			if ($row = mysqli_fetch_assoc($result)){
				//dehashing
				$hashedPwdCheck = password_verify($pwd, $row['szPassword']);
				if ($hashedPwdCheck == false){
					header("Location: ../signin.php?login=error3");
					exit();
				}elseif ($hashedPwdCheck == true){
					//login
					$_SESSION['u_id'] = $row['szUsername'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../signin.php?login=error");
	exit();
}
