<?php

include("../includes/connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE vluchten 
            SET place_departure = :place_departure, 
                place_destination = :place_destination, 
                time_arrived = :time_arrived, 
                time_leaving = :time_leaving, 
                seats = :seats
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":place_departure", $_POST['place_departure']);
    $stmt->bindParam(":place_destination", $_POST['place_destination']); 
    $stmt->bindParam(":time_arrived", $_POST['time_arrived']);
    $stmt->bindParam(":time_leaving", $_POST['time_leaving']);
    $stmt->bindParam(":seats", $_POST['seats']);
    $stmt->execute();   

    header("Location: vluchten-admin.php");
};

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM vluchten WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: vluchten-admin.php");
}

if (isset($_POST['create'])) {

$sql = "INSERT 
        INTO vluchten (id, place_departure, place_destination, time_arrived, time_leaving, seats) 
        VALUES (:id, :place_departure, :place_destination, :time_arrived, :time_leaving, :seats)";

$stmt = $conn->prepare($sql);
$stmt ->bindparam(":id", $_POST['id']);
$stmt ->bindparam(":place_departure", $_POST['place_departure']);
$stmt ->bindparam(":place_destination", $_POST['place_destination']);
$stmt ->bindparam(":time_arrived", $_POST['time_arrived']);
$stmt ->bindparam(":time_leaving", $_POST['time_leaving']);
$stmt ->bindparam(":seats", $_POST['seats']);
$stmt ->execute();

header("Location: vluchten-admin.php");
}