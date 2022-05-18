<?php


session_start();
if($_SESSION['sess_name'] == "adminaccountje") {

} else {
    header('location:index.php');
}

?>
<div>ADMIN PANEL</div>
<button><a href="index.php">HOME</a></button>
<a href="uitloggen.php">Uitloggen</a>