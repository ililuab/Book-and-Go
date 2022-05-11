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
    <title>Boeken</title>
</head>

<body>

    <main>
        <?php
        include_once('../includes/connect.php');
        ?>

        <form action="boekenredirect.php" method="post">
            <div>
                <input type="text" class="" name="name" placeholder="Naam" />
            </div>
            <div>
                <input type="number" name="boekid" value="" placeholder="Vlucht id" />
            </div>
            <div>
                <input type="submit" value="Boeken" name="Boeken"></input>
            </div>
        </form>
    </main>

</body>

</html>