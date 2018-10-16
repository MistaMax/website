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
    <link rel="stylesheet" href="style.css">
    <title>Chevron Work Order Organizer</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body id="body-over">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php"><img src="chevron.png" id="logo-badge" width="50" height="50">Chevron Work Orders</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <?php
    if(isset($_SESSION['u_id']))
    {
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Workers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="findWorker.php">Find</a>
            <a class="dropdown-item" href="addWorker.php">Add</a>
            <a class="dropdown-item" href="displayWorkers.php">Display</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Certifications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="findCert.php">Find</a>
            <a class="dropdown-item" href="addCert.php">Add</a>
            <a class="dropdown-item" href="displayCertifications.php">Display</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Work Orders
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="findWorkOrder.php">Find</a>
            <a class="dropdown-item" href="addWorkOrder.php">Add</a>
            <a class="dropdown-item" href="displayWorkOrders.php">Display</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Work Logs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="findWorkLog.php">Find</a>
            <a class="dropdown-item" href="addWorkLog.php">Add</a>
            <a class="dropdown-item" href="displayWorkLogs.php">Display</a>
        </div>
        </li>';
    }
    else
    {
        echo '<li class="nav-item active">
        <a class="nav-link" href="signup.php">Sign Up</a>
    </li>';
    }
    ?>
</ul>
    <?php
        if(isset($_SESSION['u_id']))
        {
            echo '<div class="my-2 my-lg-0 mr-sm-2 user-name">
            <img width="50" height="50" src="load.gif">'.
            $_SESSION['u_id'].
            '</div>
            <div class="my-2 my-lg-0 mr-sm-2">
            <form action="includes/logout.inc.php" method ="POST">
            <button class="fancy-button" type="submit" name="submit">
            Logout
            </button>
            </form>
            </div>';
        }
        else
        {
            echo '<div class="my-2 my-lg-0 mr-sm-2 user-name-container">
            <a class="user-name nav-item nav-link" href="signin.php">
            Sign In
            </a>
            </div>';
        }
    ?>
</div>
</nav>
