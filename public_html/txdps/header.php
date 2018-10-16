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
    <title>TxDPS</title>
    <link rel="shortcut icon" type="RRGaming_Logo.png" href="favicon.ico" />
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body id="body-over">
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php"><img src="RRGaming_Logo.png" id="logo-badge" width="50" height="50">Roadrunner Gaming</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divisions 
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Communications/SWIC</a></li>
                <li><a class="dropdown-item" href="#">Highway Patrol</a></li>
                <li><a class="dropdown-item" href="#">Motorcycle/ATC Safety Unit</a></li>
                <li><a class="dropdown-item" href="#">Public Integrity Unit</a></li>
                <li><a class="dropdown-item" href="#">Public Safety Commission</a></li>
                <li><a class="dropdown-item" href="#">Texas Rangers Division</a></li>
            </ul>                     
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Information 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Policy</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">DPS Laboratory Accreditation</a></li>
                        <li><a class="dropdown-item" href="#">Occupant Restraint Laws</a></li>
                        <li><a class="dropdown-item" href="#">Officer Involved Shootings</a></li>
                        <li><a class="dropdown-item" href="#">Texas Statutes</a></li>
                        <li><a class="dropdown-item" href="#">Title VI Program Policy</a></li>
                        <li><a class="dropdown-item" href="#">TX DPS Employee Leave Policy</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Public Safety</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Amber and Related Alerts</a></li>
                        <li><a class="dropdown-item" href="#">Border Security</a></li>
                        <li><a class="dropdown-item" href="#">Child Passenger Safety</a></li>
                        <li><a class="dropdown-item" href="#">Firearms Safety</a></li>
                        <li><a class="dropdown-item" href="#">Identity Theft</a></li>
                        <li><a class="dropdown-item" href="#">Texas Ten Most Wanted</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Reports</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Agency Strategic Plan</a></li>
                        <li><a class="dropdown-item" href="#">Cyber Security Newsletters</a></li>
                        <li><a class="dropdown-item" href="#">Department Budget</a></li>
                        <li><a class="dropdown-item" href="#">DPS Reports</a></li>
                        <li><a class="dropdown-item" href="#">Interoperability Reports</a></li>
                        <li><a class="dropdown-item" href="#">NIBR/TIBRS</a></li>
                        <li><a class="dropdown-item" href="#">Sunset Review Process</a></li>
                        <li><a class="dropdown-item" href="#">TX GOV Code Ch 659 Report</a></li>
                    </ul>
                </li>                     
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Crime Records</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Criminal History Search</a></li>
                        <li><a class="dropdown-item" href="#">Fingerprint Services</a></li>
                        <li><a class="dropdown-item" href="#">Sex Offender Registry Search</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">CODIS DNA Database Program</a></li>
                <li><a class="dropdown-item" href="#">Department Veterans Assistance Program (DVAP)</a></li>
                <li><a class="dropdown-item" href="#">DPS Forms</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Driver License</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Address Change</a></li>
                        <li><a class="dropdown-item" href="#">Driver Record Requests</a></li>
                        <li><a class="dropdown-item" href="#">Office Locations</a></li>
                        <li><a class="dropdown-item" href="#">Renewal</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">Emergency Management</a></li>
                <li><a class="dropdown-item" href="#">Missing Persons Clearinghouse</a></li>
                <li><a class="dropdown-item" href="#">Mobile App</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item": href="#">
                <b class="caret-right"></b>Regulatory Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Capitol Access Pass</a></li>
                        <li><a class="dropdown-item" href="#">Commissioned Online Prescription System</a></li>
                        <li><a class="dropdown-item" href="#">Compassionate Use Program</a></li>
                        <li><a class="dropdown-item" href="#">Handgun Licensing</a></li>
                        <li><a class="dropdown-item" href="#">Ignition Interlock</a></li>
                        <li><a class="dropdown-item" href="#">Peyote</a></li>
                        <li><a class="dropdown-item" href="#">Precursor Laboratory Apparatus</a></li>
                        <li><a class="dropdown-item" href="#">Private Security</a></li>
                        <li><a class="dropdown-item" href="#">Texas Metals Program</a></li>
                        <li><a class="dropdown-item" href="#">Vehicle Inspection</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">School Bus Transportation</a></li>
                <li><a class="dropdown-item" href="#">THP Citation Search</a></li>
                <li><a class="dropdown-item" href="#">Vehicle Inspection</a></li>
                <li><a class="dropdown-item" href="#">Victim Services</a></li>                  
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>About DPS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">General Information</a></li>
                        <li><a class="dropdown-item" href="#">Maps to DPS</a></li>
                        <li><a class="dropdown-item" href="#">Organization Chart</a></li>
                        <li><a class="dropdown-item" href="#">Site Index</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item" href="#">
                <b class="caret-right"></b>Contact Us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Doing Business with DPS</a></li>
                        <li><a class="dropdown-item" href="#">Have a Complaint/Compliment?</a></li>
                        <li><a class="dropdown-item" href="#">Public Information Requests</a></li>
                        <li><a class="dropdown-item" href="#">Stranded Motorist Hotline</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">Medal of Valor</a></li>
                <li class="dropdown-submenu"><a class="dropdown-item": href="#">
                <b class="caret-right"></b>Programs</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Law Enforcement Education</a></li>
                        <li><a class="dropdown-item" href="#">Polygraph School</a></li>
                        <li><a class="dropdown-item" href="#">Reserve Officer Program</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-item" href="#">Solicitations</a></li>
                <li><a class="dropdown-item" href="#">Texas LESO Program</a></li>
                <li><a class="dropdown-item" href="#">Tribute to a Fallen Employee</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="login.php" id="navbarDropdownMenuLink" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login 
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">CAPPS Login</a></li>
                <li><a class="dropdown-item" href="#">Texas Veterans Portal</a></li>
                <li><a class="dropdown-item" href="#">ERR Entry</a></li>
            </ul>                     
        </li>
    </ul>
</div>
</div>
<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</nav>