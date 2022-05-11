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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go | Dashboard</title>
</head>

<body>
    <main>
        <?php
        session_start();
        if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
            echo '<h1>Ingelogd als: ' . $_SESSION['sess_name'] . '</h1>';
            echo '<h4><a href="uitloggen.php">Uitloggen</a></h4>';
            echo '<h4><a href="index.php">Terug naar home</a></h4>';
        } else {
            header('location:account.php');
            session_destroy();
        }
        ?>
    </main>
</body>

</html>