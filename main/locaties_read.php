<?php
include_once('../includes/connect.php');

$query = $conn->prepare('SELECT * FROM vluchten');
$query->execute();
$results = $query->fetchAll();
$rows = $query->rowCount();

if ($rows != 0) {
    foreach ($results as $r) {
        echo "<form method='get' action='boeken.php'>";
        echo "<div class='tableouter'>";
        echo "<table class='tablevluchten'>";
        echo "<tr>";
        echo "<td>" . $r['place_departure'] . "</td>";
        echo "<td>" . $r['place_destination'] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        echo "</form>";
    }
} else {
    echo '<h4>Helaas er zijn geen locaties gevonden.</h4>';
}

?>