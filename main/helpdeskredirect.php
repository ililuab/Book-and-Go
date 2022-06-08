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
            header("Location: ../main/index.php");
        }
    }
    ?>