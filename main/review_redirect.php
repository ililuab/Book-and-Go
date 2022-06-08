<?php

include_once("../includes/connect.php");

if (isset($_POST['submit_review'])) {

    $sql = "INSERT 
            INTO reviews (id, email, review, beschrijving) 
            VALUES (:id, :email, :review, :beschrijving)";

    $stmt = $conn->prepare($sql);
    $stmt ->bindparam(":id", $_POST['id']);
    $stmt ->bindparam(":email", $_POST['email_review']);
    $stmt ->bindparam(":review", $_POST['review']);  
    $stmt ->bindparam(":beschrijving", $_POST['beschrijving']);
    $stmt ->execute();

    header("Location: over_ons.php");

}
?>