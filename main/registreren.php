<?php
include_once("../includes/connect.php");
if (isset($_POST['registeren'])) {
    if ($_POST['name'] != "" || $_POST['username'] != "" || $_POST['password'] != "") {
        
        $sql = "INSERT INTO users (username, password, name) VALUES (:username, :password, :name)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->execute();

        echo ' gedan';

        // $_SESSION['message'] = array("text" => "User aangemaakt.", "alert" => "info");
        // header('location: account.php');
    } else {
        echo "
                        <script>alert('Alles invullen!')</script>
                        <script>window.location = 'account_registreren.php'</script>
                    ";
    }
}
