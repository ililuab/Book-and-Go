<?php
include_once('../includes/connect.php');

session_start();
if ($_SESSION['sess_name'] == "adminaccountje") {
} else {
    header('location:index.php');
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
    <title>Book And Go | Admin</title>
</head>

<body>
    <main class="main-dashboard-admin">
            <div class="sidebar-admin">
                <header>BookAndGo | Admin Panel</header>
                <ul class="admin"> 
                    <li>
                        <a href="index.php"><i class="fa-solid fa-house-user"></i>Book and Go</a>
                        <a href="admin.php"><i class="fa-solid fa-house-user"></i>Admin panel - Home</a>
                        <a href="../admin/account-admin.php"><i class="fa-solid fa-eye"></i>Accounts - C.R.U.D</a>
                        <a href="../admin/vluchten-admin.php"><i class="fa-solid fa-sliders"></i>Vluchten - C.R.U.D</a>
                        <a href="uitloggen.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Uitloggen</a>
                </ul>
            </div>
            <div class="dashboardouter-admin">
                <div class="dashboardinner-admin">
                    <div class="flex">
                    <div class="block-header-admin"><p class="welkom_text_admin">Welkom terug: </p><div class="username_echo"><?php echo $_SESSION['sess_name'] ?></div></div>
                    </div>
                    <div class="container-squares-admin">
                        <div class="square-admin"></div>
                        <div class="square-admin"></div>
                        <div class="square-admin"></div>
            </div>
        </div>
            </div>
    </main>

</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>