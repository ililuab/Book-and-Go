<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk redirect</title>
</head>

<body>

    <?php
    include_once('../includes/connect.php');
    session_start();

    $submit_helpdesk = $_POST['submit_helpdesk'];
    $email_helpdesk = $_POST['email_helpdesk'];
    $message_helpdesk = $_POST['message_helpdesk'];
    if (!isset($submit_helpdesk)) {
        header('location: index.php');
    } else {
        if ($email_helpdesk != "" && $message_helpdesk != "") {
            $sql = "INSERT INTO helpdesk (email, message) VALUES ('$email_helpdesk', '$message_helpdesk')";
            $conn->exec($sql);
            echo "<script>alert('verstuurd')</script>; <script>window.location = 'index.php'</script>";
        
        } else {
            echo "<script>alert('Alles goed invullen!')</script>; <script>window.location = 'index.php'</script>";
        }
    }






    ?>

</body>

</html>