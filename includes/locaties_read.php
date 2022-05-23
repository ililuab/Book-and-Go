<?php
include_once('../includes/connect.php');


$query = $conn->prepare('SELECT * FROM vluchten');
$query->execute();
$results = $query->fetchAll();
$rows = $query->rowCount();

if ($rows != 0) {
    foreach ($results as $r) {
?><div class="place_departure_div"><?php echo $r['place_departure'] ?></div>
        <div class="place_destination_div"><?php echo $r['place_destination'] ?></div>
<?php
    }
} else {
    echo '<h4>Helaas er zijn geen locaties gevonden.</h4>';
}

?>