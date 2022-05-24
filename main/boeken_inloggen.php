<?php
        session_start();
        include_once("../includes/connect.php")
        ?>
        <?php
        $msg = "";
        if (isset($_POST['submitlogin'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            if ($username != "" && $password != "") {
                try {
                    $query = "select * from `users` where `username`=:username and `password`=:password";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam('username', $username, PDO::PARAM_STR);
                    $stmt->bindValue('password', $password, PDO::PARAM_STR);
                    $stmt->execute();
                    $count = $stmt->rowCount();
                    $row   = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($count == 1 && !empty($row)) {

                        $_SESSION['sess_user_id']   = $row['id'];
                        $_SESSION['sess_user_name'] = $row['username'];
                        $_SESSION['sess_name'] = $row['name'];
                        header('location:boekenredirect.php');
                    } else {
                        header('location:locaties.php');
                    }
                } catch (PDOException $e) {
                    echo "fout " . $e->getMessage();
                }
            } else{
                echo "
                    <script>alert('Alles invullen!')</script>
                    <script>window.location = 'boeken.php.php'</script>
                ";
            }
        }
        ?>