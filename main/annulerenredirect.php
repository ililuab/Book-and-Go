<?php
include_once('../includes/connect.php');
if(isset($_POST['annuleren']))
{
    $annuleren = $_POST['annuleren'];

    try {

        $query = "DELETE FROM boekingen WHERE vluchtId=? LIMIT 1";
        $statement = $conn->prepare($query);
        $statement->bindParam(1, $annuleren, PDO::PARAM_INT);
        $query_execute = $statement->execute();

        if($query_execute)
        {
            header('Location:vluchtenannuleren.php');
        }
        else
        {
            echo 'hier2';
        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>