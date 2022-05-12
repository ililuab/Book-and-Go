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
  <title>Vluchten</title>
</head>

<body>
  <main>
    <div class="header_vlucht_resultaten">
      <div class="headertext_vlucht_resultatenOuter">
        <div class="headertext_vlucht_resultaten"><a href="index.php"><img class="image-vluchten" src="../media/BookAndGoLogo.jpg" alt="Book and go Logo"></a></div>
      </div>
      <div class="headertext_vlucht_resultaten">Vlucht boeken</div>
      <div class="spacer2"></div>
      <div class="mainbeige_vlucht_resultaten">
        <div class="VluchtResultatenBoxOuter">
          <div class="VluchtResultatenBoxInner">
            <h1 class='H1Vluchten'>Vluchten</h1>
            <div class="VluchtResultatenBoxInnerBeige">
              <div class="resultaten">
                <?php
                include_once("../includes/connect.php");
                $submit = $_POST['submit'];
                if (!isset($submit)) {
                  header('location: index.php');
                } else {
                }

      <div class="spacer2"></div>
      <div class="mainbeige_vlucht_resultaten">
        <div class="resultaten">
          <?php
          include_once("../includes/connect.php");
          $submit = $_POST['submit'];
          if (!isset($submit)) {
            header('location: index.php');
          } else {
          }

          if ($_POST['submit']) {
            $key = $_POST['search'];
            $query = $conn->prepare('SELECT * FROM vluchten WHERE place_departure LIKE :keyword OR place_destination LIKE :keyword ORDER BY place_departure');
            $query->bindValue(":keyword", "%" . $key . "%", PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll();
            $rows = $query->rowCount();

            if ($rows != 0) {
          ?>
              <div class="tableinfo"></div>
          <?php foreach ($results as $r) {
                echo "<form method='get' action='boeken.php'>";
                echo "<div class='tableouter'>";
                echo "<table class='tablevluchten'>";
                echo "<tr>";
                echo "<td>" . $r['id'] . "</td>";
                echo "<td>" . $r['place_departure'] . "</td>";
                echo "<td>" . $r['place_destination'] . "</td>";
                echo "<td>" . $r['time_leaving'] . "</td>";
                echo "<td>" . $r['time_arrived'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
                echo "</form>";
              }
            } else {
              echo '<h4>"Helaas er zijn geen vluchten gevonden."</h4>';
            }
          }
          ?>


              </div>
            </div>
            <div class="VluchtBoekenButtonOuter">
              <form action="boeken.php">
                <div class="VluchtBoekenButtonOuter">
                  <input class="VluchtboekenButton" type="submit" value="Boeken" name="Boekengaan"></input>
                </div>
              </form>

        </div>

        <div class="VluchtBoekenButtonOuter">
          <form action="boeken.php">
            <div class="VluchtBoekenButtonOuter">
              <input class="VluchtboekenButton" type="submit" value="Boeken" name="Boekengaan"></input>
            </div>
          </form>

        </div>
      </div>

      <div class="underheader-vluchten">
        <div class="underheaderInner-vluchten">
          <a class="headerlinks-vluchten" href="locaties.php">Locaties</a>
          <a class="headerlinks-vluchten" href="klantenervice.php">Klantenservice</a>
          <a class="headerlinks-vluchten" href="contact.php">Contact</a>
          <a class="headerlinks-vluchten" href="over_ons.php">Privacy policy</a>
        </div>
      </div>
      <div class="underheader-vluchten">
        <div class="underheaderInner-vluchten">
          <a class="headerlinks-vluchten" href="locaties.php">Locaties</a>
          <a class="headerlinks-vluchten" href="klantenervice.php">Klantenservice</a>
          <a class="headerlinks-vluchten"href="contact.php">Contact</a>
          <a class="headerlinks-vluchten" href="over_ons.php">Privacy policy</a>
        </div>
      </div>
    </div>
    </div>