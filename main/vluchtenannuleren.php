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
    <title>Book And Go | Vluchten annuleren</title>
</head>

<body>
    <main class='main-dashboard'>
        <div class="sidebar">
            <header class='headerdb'><?php echo 'Ingelogd als: ' . $_SESSION['sess_user_name'] ?></header>
            <ul>
                <li>
                    <a href="index.php"><i class="fa-solid fa-house-user"></i>Book and Go</a>
                    <a href="dashboard.php"><i class="fa-solid fa-house-user"></i>Dashboard</a>
                    <a href="vluchteninzien.php"><i class="fa-solid fa-eye"></i>Vluchten Inzien</a>
                    <a href="vluchtenannuleren.php"><i class="fa-solid fa-ban"></i>Vluchten Annuleren</a>
                    <a href="uitloggen.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Uitloggen</a>
                </li>
            </ul>
        </div>
        <div class="dashboardouter">
            <div class="dashboardinner">
                <?php
                $sessie_id = $_SESSION['sess_user_id'];
                $query = $conn->prepare('SELECT vluchtId FROM boekingen WHERE gebruikersId = :sessie_id ');
                $query->bindParam(':sessie_id', $sessie_id);
                $query->bindColumn('vluchtId', $vluchtId);
                $query->execute();
                $results = $query->fetchAll();
                $rows = $query->rowCount();
                $stmt = $conn->prepare("SELECT * FROM vluchten WHERE id = '" . $vluchtId . "'");
                $stmt->execute();
                $resultaten = $stmt->fetchAll();
                $rows = $stmt->rowCount();


                foreach ($resultaten as $r) {
                ?>
                    <div class="dashboard-outer">
                        <div class='tableouter'>
                            <table class='tablevluchten'>
                                <tr>
                                    <td><?php echo $r['id'] ?></td>
                                    <td><?php echo $r['place_departure'] ?></td>
                                    <td><?php echo $r['place_destination'] ?></td>
                                    <td><?php echo $r['time_leaving'] ?></td>
                                    <td><?php echo $r['time_arrived'] ?></td>
                                </tr>
                            </table>
                            <form action='annulerenredirect.php' method='post'>
                                <div class="Annuleren">
                                    <button class="Zoeken" type="submit" name="annuleren" value="<?= $vluchtId ?>">Annuleren</button>
                                </div>
                            </form>

                        </div>
                    </div>
                <?php
                }
                ?>
</body>
<script src="https://kit.fontawesome.com/426386addb.js" crossorigin="anonymous"></script>

</html>