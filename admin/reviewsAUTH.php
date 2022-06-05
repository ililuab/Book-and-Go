<?php

include("../includes/connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE reviews 
            SET email = :email, 
                review = :review, 
                beschrijving = :beschrijving, 
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":review", $_POST['review']); 
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->execute();   

    header("Location: admin-reviews.php");
};

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM reviews WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: admin-reviews.php");
}