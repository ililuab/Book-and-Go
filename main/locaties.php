<!DOCTYPE html>
<html lang="en">

<?php
include("../includes/connect.php");
error_reporting(0);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../media/BookAndGoLogo.jpg" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book and Go | Locaties</title>
</head>
<body>
    <main>
        <div class="header_vlucht_resultaten">
            <div class="headertext_vlucht_resultatenOuter">
                <div class="headertext_vlucht_resultaten">
                    <a class="header_logo" href="index.php"><img class="header_logo" src="../media/BookAndGoLogo.jpg"
                            alt="BookAndGoLogo"></a>
                    <div class="header_logo_text">Book and Go</div>
                    <div class="dropdown">
                        <div class="Header-links">Beheren</div>
                        <div class="dropdown-content">
                            <div><a href="index.php">Vlucht boeken</a></div>
                            <div><a href="dashboard.php">Vlucht wijzigen</a></div>
                            <div><a href="dashboard.php">Vlucht annuleren</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Service</div>
                        <div class="dropdown-content">
                            <div><a href="klantenservice.php">Klantenservice</a></div>
                            <div><a href="contact.php">Contact</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Account</div>
                        <div class="dropdown-content">
                            <div><a href="dashboard.php">Dashboard</a></div>
                            <div><a href="account.php">Inloggen</a></div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="Header-links">Over</div>
                        <div class="dropdown-content">
                            <div><a href="locaties.php">Locaties</a></div>
                            <div><a href="over_ons.php">Over ons</a></div>
                        </div>
                    </div>
                    <div class='session-naam'><a href="dashboard.php"><?php session_start(); echo $_SESSION['sess_name'];?></a></div>
                </div>
            </div>
        </div>
        </div>
        <div class="spacer3"></div>

        <div class="container_locatie">
            <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1XLCqLCDOpc_artqbBZ2UKyTweewkM8KM&ehbc=2E312F"
                width="100%" height="600"></iframe>
            <div class="container_locatie_inner">
                <h1>Al onze bestemmingen!</h1>
            </div>
        
        </div>


    </main>
    <footer>
        <div class="underheader-vluchten">
            <div class="underheaderInner-vluchten">
                <a class="headerlinks-vluchten" href="locaties.php">Locaties</a>
                <a class="headerlinks-vluchten" href="index.php">Boeken</a>
                <a class="headerlinks-vluchten" href="klantenservice.php">Klantenservice</a>
                <a class="headerlinks-vluchten" href="over_ons.php">Over Ons</a>
            </div>
        </div>
    </footer>
    <script src="../js/locatie.js"></script>

</html>