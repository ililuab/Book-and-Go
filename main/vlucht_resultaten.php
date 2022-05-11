<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Document</title>
</head>

<body>
  <main>
    <div class="header_vlucht_resultaten">
      <div class="headertext_vlucht_resultaten">Vlucht boeken</div>
      <div class="mainbeige_vlucht_resultaten">
        <div class="VluchtResultatenBoxOuter">
          <div class="VluchtResultatenBoxInner">
            <h1 class='H1Vluchten'>Vluchten</h1>
            <div class="VluchtResultatenBoxInnerBeige">
              <div class="resultaten">
                <?php
                include_once("../includes/connect.php");
                if ($_POST['submit']) {
                  $key = $_POST['search'];
                  $query = $conn->prepare('SELECT * FROM vluchten WHERE place_departure LIKE :keyword OR place_destination LIKE :keyword ORDER BY place_departure');
                  $query->bindValue(":keyword", "%" . $key . "%", PDO::PARAM_STR);
                  $query->execute();
                  $results = $query->fetchAll();
                  $rows = $query->rowCount();


                  if ($rows != 0) {
                    foreach ($results as $r) {
                      echo '<h4>' . $r['place_departure'] . ' naar ' . $r['place_destination'] . " " . $r['time_leaving'] . " " . $r['time_arrived'] . '</h4>';
                    }
                  } else {
                    echo '<h4>"Helaas, er zijn geen vluchten gevonden."</h4>';
                  }
                }

                ?>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    </div>