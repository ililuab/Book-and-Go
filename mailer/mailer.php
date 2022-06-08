<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailer/Exception.php';
require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';
//Bookandgocrud!
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = false;                             // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bookandgo.nl@outlook.com';                 // SMTP username
    $mail->Password = 'Bookandgocrud!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;
    $mail->isHTML(true);                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bookandgo.nl@outlook.com');
    $mail->addAddress('bookandgo.nl@outlook.com');



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "Bericht: " . $_POST['text'] . " Verzender: " . ($_POST['mail']);

    $mail->send();

    echo "<script>window.location = '../main/klantenservice.php'</script>";

    exit();
} catch (Exception $e) {
    echo "<script>alert('Probeer het opnieuw! (ERROR: $mail->ErrorInfo)')</script>; <script>window.location = '../main/klantenservice.php'</script>";
}
?>