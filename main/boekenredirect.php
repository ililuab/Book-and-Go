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
    <title>Boeken redirect</title>
</head>

<body>

</body>

</html>

<?php
include_once('../includes/connect.php');
session_start();

$Boeken = $_POST['Boeken'];
if (!isset($Boeken)) {
    header('location: index.php');
} else {
}

if ($_POST['Boeken']) {
    $key = $_POST['boekid'];
    $query = $conn->prepare('SELECT id FROM vluchten WHERE id LIKE :keyword');
    $query->bindValue(":keyword", $key, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll();
    $rows = $query->rowCount();

    if ($rows != 0) {
        foreach ($results as $r) {
            $name = $_POST['name'];
            $boek_id = $_POST['boekid'];
            $sql = "UPDATE users SET booked_flight = '$boek_id' WHERE name = '$name'";
            $conn->exec($sql);
            echo "<script>alert('Vlucht geboekt, Veel reis plezier!')</script>; <script>window.location = 'index.php'</script>";

        }
    } elseif (!isset($name) || trim($boek_id) == '') {
        echo "<script>alert('Alles invullen!')</script>; <script>window.location = 'boeken.php'</script>";
    } elseif ($rows == 0) {
        echo "<script>alert('Check of vlucht id goed is!')</script>; <script>window.location = 'boeken.php'</script>";
    }
}

?>