<?php

include("../includes/connect.php");

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM boekingen WHERE vluchtId = :vluchtId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":vluchtId", $_POST['vluchtId']);
    $stmt->execute();

    header("Location: boekingen-admin.php");
}

