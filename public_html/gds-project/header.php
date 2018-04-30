<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <title>GDS</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body id="body-over">
<nav class="site-header sticky-top py-1" id="menu-table">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="nav.html">
            <img src="cart.gif" id="logo-badge" width="60" height="60">
        </a>
        <a class="py-2 d-none d-md-inline-block display-4 align-bottom" id="menu-item" href="index.php">Home</a>
        <?php
					if (isset($_SESSION['u_id'])){
						echo '<div class="py-2 d-none d-md-inline-block display-4 align-bottom" id="menu-item">USER: '.$_SESSION['u_uid'].'</div>
							<form class="py-2 d-none d-md-inline-block display-4 align-bottom loginform" id="menu-item" action="includes/logout.inc.php" method ="POST">
								<button class="logoutButton" type="submit" name="submit">LOGOUT</button>
							</form>';
					} else{
                        echo '<a class="py-2 d-none d-md-inline-block display-4 align-bottom" id="menu-item" href="signup.php">Sign Up</a>
                              <form class="py-2 d-none d-md-inline-block display-4 align-bottom loginform" id="menu-item" action="includes/login.inc.php" method="POST">
								<input class="inp" type="text" name="uid" placeholder="USERNAME">
								<input class="inp" type="password" name="pwd" placeholder="PASSWORD">
								<button class="loginBut" type="submit" name="submit">LOGIN</button>
							</form>';
					}
		?>
    </div>
</nav>
