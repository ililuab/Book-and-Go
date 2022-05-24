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
    <title>Book And Go | Boeken</title>
</head>

<body>
    <main>
    <div class="header_vlucht_resultaten">
            <div class="headertext_vlucht_resultatenOuter">
                <div class="headertext_vlucht_resultaten">
                    <a class="header_logo" href="index.php"><img class="header_logo" src="../media/BookAndGoLogo.jpg" alt="BookAndGoLogo"></a>
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
        <div class="boekenrd-bg">
        <div class="account-inloggen-form">
        <form class='account_login' action="boekenredirect.php" method="post">
            <div>
                <input class="account-inloggen-form-input" type="number" name="vluchtid" value="" placeholder="Vlucht Nummer" />
            </div>
            <div>
                <input class='account-inloggen-form-submit' type="submit" value="Boeken" name="Boeken"></input>
            </div>
        </form>
        </div>
        </div>
    </main>

</body>

</html>

<?php
include_once('../includes/connect.php');
session_start();
error_reporting(0);
    $key = $_POST['vluchtid'];
    $query = $conn->prepare('SELECT id FROM vluchten WHERE id LIKE :keyword');
    $query->bindValue(":keyword", $key, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll();
    $rows = $query->rowCount();


    if ($rows != 0) {
        $vluchtid = $_POST['vluchtid'];
        $sessie_id = $_SESSION['sess_user_id'];
        $sql = "INSERT INTO boekingen (boekingId, gebruikersId, vluchtId) VALUES ('', '$sessie_id', '$vluchtid')";
        $conn->exec($sql);
        echo "<script>alert('Vlucht geboekt, Veel reis plezier!')</script>; <script>window.location = 'index.php'</script>";
    }

?>