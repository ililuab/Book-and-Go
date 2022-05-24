<?php


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
                    <a href="../main/index.php"><i class="fa-solid fa-house-user"></i>Book and Go</a>
                    <a href="../main/admin.php"><i class="fa-solid fa-house-user"></i>Admin panel - Home</a>
                    <a href="../admin/account-crud.php"><i class="fa-solid fa-eye"></i>Accounts - C.R.U.D</a>
                    <a href="../admin/vluchten-crud.php"><i class="fa-solid fa-sliders"></i>Vluchten - C.R.U.D</a>
                    <a href="../main/uitloggen.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Uitloggen</a>
            </ul>
        </div>



        <div class="dashboardouter-admin">
            <div class="dashboardinner-admin">
                <div class="flex">
                <div class="block-header-admin3">
                    <p class="welkom_text_admin">Welkom terug: <?php echo $_SESSION['sess_name'] ?></p>
         
                            <form METHOD="POST" ACTION="../">
                    <TABLE class="table-vluchten-admin" BORDER="1">
                        <TR>
                        <TD><INPUT value="vlucht ID" TYPE="TEXT" NAME="id" SIZE="20"></TD>
                        </TR>
                        <TR>
                            <TD><INPUT value="Plaats van vertrek" TYPE="TEXT" NAME="email" SIZE="25"></TD>
                        </TR>
                        <TR>
                            <TD><INPUT value="Plaats van aankomst" TYPE="TEXT" NAME="email" SIZE="25"></TD>
                        </TR>
                        <TR>
                            <TD><INPUT value="Tijd van vertrek" TYPE="TEXT" NAME="email" SIZE="25"></TD>
                        </TR>
                        <TR>
                            <TD><INPUT value="Tijd van aankomst" TYPE="TEXT" NAME="email" SIZE="25"></TD>
                        </TR>
                        <TR>
                            <TD><INPUT value="Vlucht plekken" TYPE="TEXT" NAME="email" SIZE="25"></TD>
                        </TR>
                    </TABLE>
                </FORM>
            </div>
        </div>
    </div>
</div>
</div>

    
</main>

</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>