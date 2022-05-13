<?php
include_once('../includes/connect.php')


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../media/BookAndGoLogo.jpg" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go</title>
</head>

<body>
    <main>
        <div class="header-img" src="../media/oldbackground.jpg" alt="Snow" style="width:100%;">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="../media/vacationpicture1.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="../media/vacationpicture2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="../media/vacationpicture3.jpg" style="width:100%">
                </div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <br>
        <div class="top-center">
            <div class="header">
                
                <div class="dropdown">
                    <a href="../main/account.php" class="dropbtn">Inloggen</a>
                    <div class="dropdown-content">
                        <a href="../main/dashboard.php">Dashboard</a>
                    </div>
                </div>
                <a class="Header-links" href="../main/locaties.php">Locaties</a>
                <a href="index.php"><img class="Header-Logo" src="../media/BookAndGoLogo.jpg" alt="Logo bookandgo"></a>
                <a class="Header-links" href="../main/over_ons.php">Over ons</a>
                <a class="Header-links" href="../main/contact.php">Contact</a>
            </div>
            
        <div class="OuterPHPEngine">
            <div class="InnerPHPEngine">
              <div class="InnerHigh"><img class="Airplane" src="../media/airplane.png" alt="Vliegtuig">
                <h1 class="AirplaneText">Vluchten</h1>
              </div>
              <div class="VluchtenzoekenOuter">
                <form class="vluchtenzoeken" name="form1" method="post" action="vluchten.php">
                  <div class="ZoekenInvoerVeldenOuter">
                    <h1 class="VluchtenZoekenHeader">Vanaf</h1>
                    <input class="Vertrekluchthaven" type="text" placeholder="Vertrekluchthaven" name="search" aria-label="Search" required>
                  </div>
                  <div class="ZoekenInvoerVeldenOuter">
                    <h1 class="VluchtenZoekenHeader">Bestemming</h1>
                    <input class="Bestemming" type="text" placeholder="Bestemming" name="search" aria-label="Search" required>
                  </div>
                  <div class="ZoekenInvoerVeldenOuter">
                    <h1 class="VluchtenZoekenHeader">Wie gaan er mee?</h1>
                    <input class="Bestemming" type="number" placeholder="1 Volwassene" aria-label="Search" min="1" max="25" required>
                  </div>
                  <div class="ZoekenInvoerVeldenOuter">
                    <h1 class="VluchtenZoekenHeader">Vertrekdatum</h1>
                    <input class="Bestemming" type="date" placeholder="Bestemming" name="indexcalender" aria-label="Search" required>
                  </div>
                  <div class="ZoekenOuter">
                    <input class="Zoeken" type="submit" value="Zoeken" name="submit"></input>
                  </div>
                </form>
              </div>
  
            </div>
          </div>
        </div>
        </div>
        <div class="ContainerContext ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f3e5d8" fill-opacity="1"
                    d="M0,96L48,90.7C96,85,192,75,288,106.7C384,139,480,213,576,229.3C672,245,768,203,864,165.3C960,128,1056,96,1152,101.3C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            <div class="threeboxes">
                <div class="contextbox">
                    <div class="purplebox">
                        <img class="contextboximg" src="../media/corona.png" alt="">
                    </div>
                    <h1 class="contextboxtext1">Alles over het coronavirus</h1>
                    <a href='' class="contextboxundertext">Alle informatie omtrend SARS-19</a>
                    <a href='' class="contextboxundertext">De Reisvoorwaarden</a>

                </div>
                <div class="contextbox">
                    <div class="greenbox">
                        <img class="contextboximg" src="../media/ticket.png" alt="">
                    </div>
                    <h1 class="contextboxtext2">Boeken met vertrouwen</h1>
                    <a href='' class="contextboxundertext">Vluchten zoeken</a>
                    <a href='' class="contextboxundertext">Locaties bekijken</a>
                    <a href='' class="contextboxundertext">Inloggen</a>
                </div>
                <div class="contextbox">
                    <div class="redbox">
                        <img class="contextboximg" src="../media/contacthuman.png" alt="">
                    </div>
                    <h1 class="contextboxtext3">Vind online het antwoord op je vraag</h1>
                    <a href='' class="contextboxundertext">Vlucht wijzigen</a>
                    <a href='' class="contextboxundertext">Vlucht annuleren</a>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
<script src="../js/main.js"></script>
</html>