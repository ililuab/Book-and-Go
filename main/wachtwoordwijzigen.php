<?php
require_once('../includes/connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailer/Exception.php';
require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';


if (isset($_POST['forget'])) {
    $user_email = $_POST['user_email'];
    $sql = "SELECT email FROM users WHERE email = ?";
    $prepare = $conn->prepare($sql);
    $prepare->execute([$user_email]);
    $rowCount = $prepare->rowCount();

    if ($rowCount > 0) {
        $mail = new PHPMailer();
        $mail->SMTPDebug = false;                             // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'bookandgo.nl@outlook.com';                 // SMTP username
        $mail->Password = 'Bookandgocrud!';                           // SMTP password
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;
        $mail->isHTML(true);
        $mail->setFrom('bookandgo.nl@outlook.com');
        $mail->addAddress($user_email);

        $mail->isHTML(true);
        $mail->Subject = "Book and Go | Wachtwoord resetten";
        $randomwachtwoord = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);
        $randomwachtwoord_final = $randomwachtwoord;
        $mail->Body = 'Uw nieuwe wachtwoord:  ' . $randomwachtwoord_final;
        $conn = $conn->prepare("UPDATE users SET PASSWORD = '$randomwachtwoord_final' WHERE email='$user_email'");
        $conn->execute();
        $mail->send();
    }
}
?>

<!DOCTYPE html>
<html class="html_ww_wijzigen" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../media/BookAndGoLogo.jpg" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go | Wachtwoord vergeten</title>
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
        <div>
            <div class="account-inloggen-form">
                <form action="wachtwoordwijzigen.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <input class='account-inloggen-form-input' type="email" id="user_email" name="user_email" placeholder="Email" required>
                    </div>
                    <div>
                        <input class='account-inloggen-form-submit' type="submit" id="forget" name="forget" value="Verzenden">
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>