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
    <title>Book and Go | Inloggen</title>
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
                </div>
            </div>
        </div>
        <div class="spacer2"></div>
        <div class="account-bg">
            <div class="account-bg-inner">
                <div class="account-img"><img class='account-img-inner' src="../media/loginimage.png" alt="Slot"></div>
                <div class="account-login">
                    <div class="account-login-inner">Inloggen</div>
                </div>
                <div class="account-inloggen-form">
                    <form class='account_login' action="account_inloggen.php" method="post">
                        <div>
                            <input class="account-inloggen-form-input" type="text" name="username" id="username"
                                value="" placeholder="Gebruikersnaam" />
                        </div>
                        <div>
                            <input class='account-inloggen-form-input' type="password" name="password" id="password"
                                value="" placeholder="Wachtwoord" />
                        </div>
                        <div>
                            <input class='account-inloggen-form-submit' type="submit" name="submitlogin"
                                id="submitlogin" value="Inloggen" />
                        </div>
                    </form>
                </div>
                <div class='account-geenaccount'>Heb je geen account? <a class='account-geenaccounthref'
                        href="account_registreren.php">Meld je nu aan!</a></div>
            </div>
            </form>
        </div>
        </div>
        </div>
    </main>
    
</body>
</html>