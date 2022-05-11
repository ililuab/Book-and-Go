<?php
include_once('../includes/connect.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Book And Go | Account</title>
</head>

<body>
    <main>

        <!-- INLOGFORM -->
        <div>
            <form action="inloggen.php" method="post">
                <h1>Inloggen</h1>
                <div>
                    <input type="text" name="username" id="username" value="" placeholder="Gebruikersnaam" />
                </div>
                <div>
                    <input type="password" name="password" id="password" value="" placeholder="Wachtwoord" />
                </div>
                <div>
                    <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Inloggen" />
                </div>
            </form>
        </div>

        <!-- REGISTERFORM -->
        <div>
            <form action="registreren.php" method="post">
                <h1>Registeren</h1>
                <div>
                    <input type="text" class="" name="name" placeholder="Naam" />
                </div>
                <div>
                    <input type="text" class="" name="username" placeholder="Gebruikersnaam" />
                </div>
                <div>
                    <input type="password" class="" name="password" placeholder="Wachtwoord" />
                </div>
                <div>
                    <button name="registeren">Registeren</button>
                </div>
            </form>
        </div>
        <button><a href="index.php">HOME</a></button>





    </main>

</body>

</html>