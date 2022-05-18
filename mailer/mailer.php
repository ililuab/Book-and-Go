<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailer/Exception.php';
require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jyvandijk.1999@gmail.com';                 // SMTP username
    $mail->Password = 'jaimyvandijk1999';                           // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                           
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['mail']);
    $mail->addAddress('jyvandijk.1999@gmail.com');



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['text'] . " " . ($_POST['mail']);

    $mail->send();

    echo "<script>alert('Mail verzonden!')</script>; <script>window.location = '../main/klantenservice.php'</script>";

    exit();
} catch (Exception $e) {
    echo "<script>alert('Probeer het opnieuw! (ERROR: $mail->ErrorInfo)')</script>; <script>window.location = '../main/klantenservice.php'</script>";
}
?>