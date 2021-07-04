<?php
include("dbconnect.php");
$numberplate = $_POST['numberplate'];
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
  </head>
  <body>

<?php
$car_sql = "SELECT car.*, make.name FROM car JOIN make ON car.makeID=make.makeID WHERE car.numberplate LIKE '%$numberplate%'";
$car_qry = mysqli_query($dbconnect, $car_sql);
$num_results = mysqli_num_rows($car_qry);
if($num_results==0) {
  echo "<h1>No Results Found</h1>";
}
$car_aa = mysqli_fetch_assoc($car_qry);


do {
  $carID = $car_aa['carID'];
  $numberplate = $car_aa['numberplate'];
  $image = $car_aa['image'];
  ?>
  <div class="card">
    <img src="images/<?php echo $image; ?>" alt="">
    <h1><?php echo "<a href='car.php?carID=$carID'>$numberplate</a>"; ?></h1>
  </div>
  <?php
} while ($car_aa = mysqli_fetch_assoc($car_qry));
echo "$num_results";
 ?>


  </body>
</html>
