<?php
        	if(ISSET($_POST['registeren'])){
                if($_POST['name'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
                    try{
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        // md5 encrypted
                        // $password = md5($_POST['password']);
                        $password = $_POST['password'];
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO `users` VALUES ('', '$username', '$password', '$name')";
                        $conn->exec($sql);
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
                    $conn = null;
                    header('location:index.php');
                }else{
                    echo "
                        <script>alert('Alles invullen!')</script>
                        <script>window.location = 'account.php'</script>
                    ";
                }
            }
        ?>