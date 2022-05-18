<?php
include_once('../includes/connect.php');
session_start();
if (isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {

    if ($_SESSION['sess_name'] == "adminaccountje") {
        header('location:admin.php');
    }
} else {
    header('location:account.php');
    session_destroy();
}
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
    <title>Book And Go | Dashboard</title>
</head>

<body>
    <main>
        <div class="dashboard-bg">
            <div class="sidebar">
                <header>BookAndGo</header>
                <ul>
                    <li>
                        <a href="index.php"><i class="fa-solid fa-house-user"></i>Home</a>
                        <a href="#"><i class="fa-solid fa-sliders"></i>Vlucht Wijzigen</a>
                        <a href="#"><i class="fa-solid fa-ban"></i>Vlucht Annuleren</a>
                        <a href="uitloggen.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Uitloggen</a>
                    </li>
                </ul>
            </div>
    </main>
    </div>

</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>