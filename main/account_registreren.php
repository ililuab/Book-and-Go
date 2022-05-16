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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Account</title>
</head>

<body>
    <main>
    <div class="header_vlucht_resultaten">
                <div class="headertext_vlucht_resultatenOuter">
                    <div class="headertext_vlucht_resultaten">
                        <img class="header_logo" src="../media/BookAndGoLogo.jpg" alt="BookAndGoLogo">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer2"></div>
        <div class="account-bg">
            <div class="account-bg-inner">
                <div class="account-img"><img class='account-img-inner' src="../media/loginimage.png" alt="Slot"></div>
                <div class="account-login">
                    <div class="account-login-inner">LOGIN</div>
                </div>
                <!-- REGISTERFORM -->
                <div class='account-registreren-form'>
                    <form action="registreren.php" method="post">
                        <h1>Registeren</h1>
                        <div>
                            <input type="text" class="" name="name" placeholder="Naam" />
                        </div>
                        <div>
                            <input type="text" class="" name="username" placeholder="Gebruikersnaam" />
                        </div>
                        <div>
                            <input type="password" class="" name="password" placeholder="Wachtwoord" />
                        </div>
                        <div>
                            <button name="registeren">Registeren</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>






    </main>

</body>

</html>