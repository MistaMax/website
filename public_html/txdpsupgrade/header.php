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
    <!--<link rel="stylesheet" href="../style/style.css">-->
    <title>Roadrunner Gaming</title>
    <link rel="shortcut icon" type="RRGaming_Logo.png" href="favicon.ico" />
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body id="body-over">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php"><img src="RRGaming_Logo.png" id="logo-badge" width="50" height="50">Roadrunner Gaming</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <?php
        if($_SERVER['REQUEST_URI'] == "/roadrunner-gaming.1/index.php"){
            echo '<li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span></a>
                </li>';
        }
        else{
            echo '<li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>';
        }

        if($_SERVER['REQUEST_URI'] == "/roadrunner-gaming.1/store.php"){
            echo '<li class="nav-item active">
            <a class="nav-link" href="store.php">Store
            <span class="sr-only">(current)</span></a>
        </li>';
        }
        else{
            echo '<li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>';
        }

        if($_SERVER['REQUEST_URI'] == "/roadrunner-gaming.1/events.php"){
            echo '<li class="nav-item active">
            <a class="nav-link" href="events.php">Events
            <span class="sr-only">(current)</span></a>
            </li>';
        }
        else{
            echo '<li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
                </li>';
        }

        if($_SERVER['REQUEST_URI'] == "/roadrunner-gaming.1/about.php"){
            echo'<li class="nav-item active">
                    <a class="nav-link" href="about.php">About
                    <span class="sr-only">(current)</span></a>
                </li>';
        }
        else{
            echo'<li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>';
        }

        if($_SERVER['REQUEST_URI'] == "/roadrunner-gaming.1/contact.php"){
            echo '<li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us
                    <span class="sr-only">(current)</span></a>
                </li>';
        }
        else{
            echo '<li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>';
        }
        ?>
    </ul>
</div>
</nav>