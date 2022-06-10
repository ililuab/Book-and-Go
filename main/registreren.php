<?php
include_once("../includes/connect.php");
if (isset($_POST['registreren'])) {
    if ($_POST['email'] != "" || $_POST['name'] != "" || $_POST['username'] != "" || $_POST['password'] != "") {

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $sql = "SELECT email FROM users WHERE email = $email";
            $prepare = $conn->prepare($sql);
            $rowCount = $prepare->rowCount();

            if ($rowCount > 0 || $_SESSION['sess_name'] == "admin") {
                $sql = "INSERT INTO users (username, email, password, name) VALUES (:username, :email, :password, :name)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':username', $_POST['username']);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':password', $_POST['password']);
                $stmt->bindParam(':name', $_POST['name']);
                $stmt->execute();
        
                echo "<script>alert('Account aangemaakt!')</script>
                      <script>window.location = 'account_registreren.php'</script>";
            }
            else {
                echo "<script>alert('Account bestaat al!')</script>
                      <script>window.location = 'account_registreren.php'</script>";
            }
        }
          
    } else {
        echo "<script>alert('Alles invullen!')</script>
              <script>window.location = 'account_registreren.php'</script>";
    }
}
