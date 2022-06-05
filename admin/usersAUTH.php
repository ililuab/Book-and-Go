<?php

include("../includes/connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE users 
            SET email = :email, 
                username = :username, 
                password = :password, 
                name = :name, 
                geboekte_vlucht = :geboekte_vlucht
                WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":username", $_POST['username']); 
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":geboekte_vlucht", $_POST['geboekte_vlucht']);
    $stmt->execute();   

    header("Location: account-admin.php");
};

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: account-admin.php");
}

if (isset($_POST['create'])) {

$sql = "INSERT 
        INTO users (id, email, username, password, name, geboekte_vlucht) 
        VALUES (:id, :email, :username, :password, :name, :geboekte_vlucht)";

$stmt = $conn->prepare($sql);
$stmt ->bindparam(":id", $_POST['id']);
$stmt ->bindparam(":email", $_POST['email']);
$stmt ->bindparam(":username", $_POST['username']);
$stmt ->bindparam(":password", $_POST['password']);
$stmt ->bindparam(":name", $_POST['name']);
$stmt ->bindparam(":geboekte_vlucht", $_POST['geboekte_vlucht']);
$stmt ->execute();

header("Location: account-admin.php");
}