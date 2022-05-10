<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
</head>
<body>

  <?php
  $button = $_GET ['submit'];
  $search = $_GET ['search'];
  $con=mysqli_connect("localhost","root","","bookandgo");
  
    $sql ="SELECT * FROM vluchten WHERE MATCH(place_departure,place_destination) AGAINST ('%" . $search . "%')";
    $run = mysqli_query($con,$sql);
    $foundnum = mysqli_num_rows($run);


    if ($foundnum==0)
    {
      echo "Geen vluchten mogelijk voor '<b>$search</b>'.";
    }
    else{     
      $sql ="SELECT * FROM vluchten WHERE MATCH(place_departure,place_destination) AGAINST ('%" . $search . "%')";
      $getquery = mysqli_query($con,$sql);
      while($runrows = mysqli_fetch_array($getquery))
      {
        echo"<h5 class='test'>" . $runrows["id"] ."</h5>";
        echo"<h5 class='test'>". $runrows["place_departure"] ."</h5>";
        echo"<h5 class='test'>". $runrows["place_destination"] ."</h5>";
        echo"<h5 class='test'>". $runrows["time_arrived"] ."</h5>";
        echo"<h5 class='test'>". $runrows["time_leaving"] ."</h5>";
        echo"<h5 class='test'>". $runrows["seats"] ."</h5>";

        }}

    mysqli_close($con);
?>

</body>
</html>