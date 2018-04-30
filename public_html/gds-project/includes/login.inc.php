<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.php';
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//Check if empty
	if (empty($uid) || empty($pwd)){
		header("Location: ../i.php?login=error");
		exit();
	}else {
		$sql = "SELECT * FROM users WHERE user_name='$uid'";
		$result = mysqli_query($connection, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
			header("Location: ../i.php?login=error");
			exit();
		}else {
			if ($row = mysqli_fetch_assoc($result)){
				//dehashing
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false){
					header("Location: ../i.php?login=error");
					exit();
				}elseif ($hashedPwdCheck == true){
					//login
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_uid'] = $row['user_name'];
					header("Location: ../i.php?login=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../i.php?login=error");
	exit();
}
	
