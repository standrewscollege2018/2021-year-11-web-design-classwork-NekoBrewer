<?php
// any page that is going to get information from the database needs
//to be connected to it. we include the connection code from the get_included_files
//dbconnect.php. the connection info is stored in a variable called $dbconnect
  include("dbconnect.php");
  $carID = $_GET['carID'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars example</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
    //to run a querry on the database, we follow three fann_get_activation_steepness
    //Step 1: set up the querry in a variable, notice the naming convention, it ends in_sql
      $car_sql = "SELECT car.*, make.name FROM car JOIN make ON car.makeID=make.makeID WHERE car.carID = $carID";
    //step 2: we run the querry
      $car_qry = mysqli_query($dbconnect, $car_sql);
      $car_aa = mysqli_fetch_assoc($car_qry);

      $numberplate = $car_aa['numberplate'];
      $colour = $car_aa['colour'];
      $driver = $car_aa['driver'];
      $make = $car_aa['name'];
      $model = $car_aa['model'];
      $image = $search_aa['image'];
    ?>
    <div class="cardetails">
      <img src="images/<?php  ?>" alt="">
      <h1><?php echo $numberplate; ?></h1>
      <p>Colour: <?php echo $colour; ?></p>
      <p>Driver: <?php echo $driver; ?></p>
      <p>Make and model: <?php echo "$make $model"; ?></p>
    </div>

  </body>
</html>
