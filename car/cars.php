<?php
  include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars example</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="content-container">
    <?php
      $cars_sql = "SELECT carID, numberplate FROM car";
      $cars_qry = mysqli_query($dbconnect, $cars_sql);
      $num_results = mysqlo_query($dbconnect, $car_sql);
      $cars_aa = mysqli_fetch_assoc($cars_qry);



      do {
        $carID = $cars_aa['carID'];
        $numberplate = $cars_aa['numberplate'];
        $image = $cars_aa['image'];
        ?>
        <div class="card">
          <img src="images/<?php echo $image;?>" alt="">
          <h1><?php echo "<a href='car.php?carID=$carID'>$numberplate</a>"; ?></h1>
        </div>
        <?php
      } while ($cars_aa = mysqli_fetch_assoc($cars_qry));
    ?>

    </div>

  </body>
</html>
