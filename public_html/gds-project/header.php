<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])){
						echo '<h2>USER: '.$_SESSION['u_uid'].'</h2>
							<form action="includes/logout.inc.php" method ="POST">
								<button type="submit" name="submit">LOGOUT</button>
							</form>';
					} else{
						echo '<form action="includes/login.inc.php" method="POST">
								<input type="text" name="uid" placeholder="USERNAME">
								<input type="password" name="pwd" placeholder="PASSWORD">
								<button type="submit" name="submit">LOGIN</button>
							</form>
							<a href="signup.php">SIGN UP</a>';
					}
				?>
				
			</div>
		</div>
	</nav>
</header>